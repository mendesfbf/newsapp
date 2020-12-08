<?php

namespace App\Http\Controllers;

use App\noticias;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
  
    public function index()
    {
        //Gerar Pdf



    $matricula = '1921315061';



   $pdf = PDF::loadview('relatorio_pdf', compact('matricula'));

   return $pdf->stream('confirmacao.pdf');


    }


}
