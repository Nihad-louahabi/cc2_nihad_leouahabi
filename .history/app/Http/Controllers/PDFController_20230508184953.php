<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  $orders;

    public function generatePDF()
    {
        $orders = Order::get();

        $data = [
            'title' => 'Facture',
            'date' => date('m/d/Y'),
            'orders' => $orders
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('Facture.pdf');
    }
}
