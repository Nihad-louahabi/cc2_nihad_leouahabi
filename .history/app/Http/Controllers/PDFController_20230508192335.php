<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use PDF;

class PDFController extends Controller
{
    /**
     * Generate a PDF invoice for all orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $orders = Order::with('orderItems')->paginate(10);

        $data = [
            'title' => 'Facture',
            'date' => date('m/d/Y'),
            'orders' => $orders,
            'subtotal' => 0,
            'tax' => 0,
            'total' => 0,
        ];

        foreach ($orders as $order) {
            if (isset($order->orderItem) && !empty($order->orderItems)) {
                foreach ($order->orderItems as $item) {
                    $data['subtotal'] += $item->subtotal;
                    $data['tax'] += $item->tax;
                    $data['total'] += $item->total;
                }
            }
        }

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('Facture.pdf');
    }
}
