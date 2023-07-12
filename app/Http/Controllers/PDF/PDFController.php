<?php

namespace App\Http\Controllers\PDF;

use App\Http\Controllers\Controller;
use App\Models\Documents;
use Dompdf\Dompdf;
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

        $html = view('Acceuil.pdfGenerate',compact('images'))->render();
       
        $pdf = new Dompdf();
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'portrait');
            
        // Rendez le contenu HTML en PDF
        $pdf->render();

        // Enregistrez le PDF sur le serveur
        $pdf->stream('exemple.pdf');

    }
}