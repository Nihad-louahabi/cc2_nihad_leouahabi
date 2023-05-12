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
        $orders = Order::paginate(10);

        $data = [
            'title' => 'Facture ',
            'date' => date('m/d/Y'),
            'orders' => $orders,
            'subtotal' => 0,
            'tax' => 0,
            'total' => 0,
        ];

        foreach ($orders as $order) {
            $data['subtotal'] = $order->subtotal;
            $data['tax'] += $order->tax;
            $data['total'] += $order->total;
        }

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('Facture.pdf');
    }
}
