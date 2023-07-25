<?php

namespace App\Http\Controllers\PDF;

use App\Http\Controllers\Controller;
use App\Models\Documents;
use Barryvdh\DomPDF\Facade\Pdf;
class PDFController extends Controller
{
    public function generatePDF($id)
    {

        
        $documents = Documents::find($id);
            
        if(!$documents) abort(404);
        
        $images = $documents->images;

        $datas = [
                'images' => $images,

        ];
        
        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed'=> TRUE
                ]
            ]);
            $pdf = Pdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
            $pdf->getDomPDF()->setHttpContext($contxt);
            
            $pdf->loadView('Acceuil.pdfGenerate', compact('images'));
            return $pdf->download('data.pdf');

    }
}