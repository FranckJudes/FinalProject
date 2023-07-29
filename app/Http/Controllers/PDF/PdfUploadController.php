<?php

namespace App\Http\Controllers\PDF;

use App\Http\Controllers\Controller;
use App\Models\Documents;
use Illuminate\Http\Request;
use App\Models\Pdf;

class PdfUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.PDF.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.PDF.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate(['pdf_file' => 'required|mimes:pdf|max:2048', ]);
            
         $txt = date("Y-m-d H:i:s");
        

        //  dd($request);
        //Enregistrement de Documents
        $new_doc = Documents::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'utilisateur_id' => $request->autheur,
            'datePublication' => $txt,
            'niveauAcademique' => $request->niveauAcademique,
            'categorie' =>  $request->categorie,
            'dateLimite' => $request->dateLimite,
        ]);
        
         if ($request->hasFile('pdf_file')) {
            $pdfFile = $request->file('pdf_file');
            $pdfName = $pdfFile->getClientOriginalName();
            $path = $pdfFile->store('pdf', 'public');
    
            $pdf = Pdf::create([
                'documents_id' => $new_doc->id,
                'path' => $path,
            ]);
    
    
            return to_route('historiqueDoc');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $pdf = Pdf::findOrFail($id);
            return view('admin.PDF.show', compact('pdf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}