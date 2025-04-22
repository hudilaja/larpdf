<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $peoples = [
            [
                "nama" => "Fulan",
                "umur" => 28,
                "tempat_lahir" => "Pasuruan",
                "tanggal_lahir" => "1996-10-01"
            ],
            [
                "nama" => "Fulan 2",
                "umur" => 25,
                "tempat_lahir" => "Bondowoso",
                "tanggal_lahir" => "1999-08-01"
            ],
            [
                "nama" => "Fulan 3",
                "umur" => 29,
                "tempat_lahir" => "Pasuruan",
                "tanggal_lahir" => "1995-10-01"
            ]
        ];

        $pdf = PDF::loadView("myPDF", compact('peoples'));

        return $pdf->stream('hudil.pdf');
    }
}
