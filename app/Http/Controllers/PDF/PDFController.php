<?php

namespace App\Http\Controllers\PDF;

use App\Http\Controllers\Controller;
use App\Models\Documents;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Dompdf\Dompdf;
class PDFController extends Controller
{
    public function generatePDF($id)
    {

        
        $documents = Documents::find($id);
            
        if(!$documents) abort(404);
        
        $images = $documents->images;
        
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('admin.dashboard'));
        $dompdf->setPaper('A4','landScape');

        $dompdf->render();
        $dompdf->stream('deemo.pdf',['attachment'=>false]);

        
        // $string = '';        
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML($output);

        // return $pdf->stream();
        
    
    }
}