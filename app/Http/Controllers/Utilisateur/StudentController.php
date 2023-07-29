<?php

namespace App\Http\Controllers\Utilisateur;

use App\Http\Controllers\Controller;
use App\Models\Documents;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6', 
            'niveauAcademique' => 'required',
            'matricule' => 'required',
        ]);


        $utilisateur =  new Student;

        $utilisateur->name = $request->name;
        $utilisateur->lastName = $request->lastname;
        $utilisateur->email = $request->email;
        $utilisateur->niveauAcademique = $request->niveauAcademique;
        $utilisateur->matricule = $request->matricule;
        $utilisateur->password = Hash::make($request->password);


        $utilisateur->save();
        
        return   to_route('PageLogin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function dashboardStudent()
    {
        $student = auth()->guard('student')->user()->niveauAcademique;


        $documents = Documents::where('niveauAcademique', $student)->get();
        
        
        return view('Students.index', ['documents' => $documents]);
    }

    public function visualiserPDFImage($id)
    {
            $document = Documents::find($id);

            if(!$document) abort(404);
            $images = $document->images;
            
            $pdf = $document->pdf;


            if($document->pdf){
             
                  return view('Students.viewdoc', compact('document', 'pdf'))->with('message','pdf');

                
                }elseif ($document->images) {
                    
                    return view('Students.viewdoc', compact('document', 'images'))->with('message','images');
                } else {
                   
                    return redirect()->route('Students.viewdoc')->with('error', 'Type de fichier inconnu.');
            }
    }   



    public function downloadDocument($id){

        $document = Documents::find($id);

        $images = $document->images;
        
        $pdf = $document->pdf;

        
        if($document->pdf){
            
            $pdfFilePath =   'storage/' . $document->pdf->path;
            return response()->download($pdfFilePath, 'mon_document.pdf');

          
          }elseif ($document->images) {
              
                
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

          } else {
             
              return redirect()->route('Students.viewdoc')->with('error', 'Type de fichier inconnu.');
      }
        
    }
    
    
   



}