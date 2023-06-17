<?php

namespace App\Http\Controllers\Docs;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestDocuments;
use App\Models\Documents;
use App\Models\Images;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DocumentController extends Controller
{

    // Page D'ajout de Documents
    public function index()
    {
        return view('admin.add-Document');
    }


    // La fonction D'upload Document et information 
    public function uploadDoc(RequestDocuments  $request){
        
        $data = $request->validated();
        $txt = date("Y-m-d H:i:s");
        
        //Enregistrement de Documents
        $new_doc = Documents::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'autheur' => $request->autheur,
            'datePublication' => $txt,
            'niveauAcademique' => $request->niveauAcademique,
            'categorie' =>  $request->categorie
        ]);
        // Enregistrement de L'image 
        if ($request->has('images')) {
            foreach ($request->file('images') as $image) 
            {
                $imageName = $data['titre'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('Documents_images'),$imageName); 
                Images::create([
                  'documents_id' => $new_doc->id,
                  'image' => $imageName,
                ]);
            }
        }  
        
        
      
        return redirect()->back()->with('success','Ajout avec success');
    }


    // Lister L'historique de tous les Documents
    public function historique()
        {
                $documents = Documents::all();
                // dd($documents);
                return view('admin.historiqueDocument',compact('documents'));
        }

        // page d'acceuil de l'Etudiant et Recherche

        public function acceuil(Request $request)
        {
            
            // $documents =  Documents::all();
            $todayDate =  Carbon::now()->format('Y-m-d');
            
            $documents = Documents::when($request->datePublication != null, function($q) use ($request)
                    {
                         return   $q->whereDate('datePublication',$request->datePublication);
                         
                    })->when($request->niveauAcademique != null, function($q) use ($request)
                    {
                         return   $q->where('niveauAcademique',$request->niveauAcademique);
                         
                    }, function($q) use ($todayDate)
                    {
                        return   $q->whereDate('datePublication',$todayDate);
                    })
            ->whereDate('datePublication',$todayDate)->paginate(10);

            
            return view('Acceuil.index',compact('documents'));   
        }

        //Recuperer tous les images d'un Documents pour Afficher cote Etudiant

        public function viewImageId($id)
        {
            //  dd($id);
            $documents = Documents::find($id);
            if(!$documents) abort(404);
            $images = $documents->images;
            return view('Acceuil.visualiserImage',compact('documents','images'));
        }


        // Delete Doc
        public function deleteDoc($id)
        {
            
            Documents::find($id)->delete();

            return redirect('historiqueDoc')->with('success','Suppression avec succes');
        }

        // Recuperer tous les images d'un Documents pour Afficher cote Administration
        public function viewIdImage($id)
        {
            $documents = Documents::find($id);
            
            if(!$documents) abort(404);
            
            $images = $documents->images;
            return view('admin.viewIdImage',compact('documents','images'));
        }


        // 
        
}