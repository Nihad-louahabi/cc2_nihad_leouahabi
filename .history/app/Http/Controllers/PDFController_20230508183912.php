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
    public  $order;

    public function generatePDF()
    {
        $order = Order::get();

        $data = [
            'title' => 'Facture',
            'date' => date('m/d/Y'),
            'order' => $order
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('Facture.pdf');
    }
}
