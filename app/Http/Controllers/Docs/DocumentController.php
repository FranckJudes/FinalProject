<?php

namespace App\Http\Controllers\Docs;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestDocuments;
use App\Models\Documents;
use App\Models\Images;
use App\Models\Utilisateur;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


    
class DocumentController extends Controller
{
    
    // Page D'ajout de Documents
    public function create()
    {
      
        return view('admin.add-Document');
    }


    // La fonction D'upload Document et information 
    public function store(RequestDocuments  $request){
        
        

        $data = $request->validated();
        $txt = date("Y-m-d H:i:s");
        
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
        // Enregistrement de L'image 
        if ($request->has('images')) {
            foreach ($request->file('images') as $image) 
            {
                $imageName = $data['titre'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('Documents_images'),$imageName); 
                // $image->storeAs('public',$imageName);
                Images::create([
                  'documents_id' => $new_doc->id,
                  'image' => $imageName,
                ]);
            }
        }  
        
        
      
        return to_route('historiqueDoc');
    }


    // Lister L'historique de tous les Documents
    public function index()
        {
                 $user =  auth()->guard('utilisateur')->user();
            
                 if ($user->roles->contains('slug', 'admin')){
                    $documents = Documents::all();
                } else {
                    $documents = Documents::where('utilisateur_id', $user->id)->get();
                }
                
                // $user = Utilisateur::with('documents')->find($user)->get();
                // $user = $documents->images;
                //  return $user;
                
               
                return view('admin.historiqueDocument',compact('documents','user'));
        }

        // page d'acceuil de l'Etudiant et Recherche

        public function acceuil(Request $request)
        {
            
          
            $documents = Documents::when($request->datePublication != null, function($q) use ($request)
                    {
                         return   $q->whereDate('datePublication',$request->datePublication);
                         
                    })->when($request->niveauAcademique != null, function($q) use ($request)
                    {
                         return   $q->where('niveauAcademique',$request->niveauAcademique);
                         
                    })->when($request->categorie != null, function($q) use ($request)
                    {
                         return   $q->where('categorie',$request->categorie);
                         
                    })->orWhere('niveauAcademique', 'ALL')
                   
                   
            ->paginate(8);

            
            return view('Acceuil.index',compact('documents'));   
        }

        //Recuperer tous les images d'un Documents pour Afficher cote Etudiant

        public function edit($id)
        {
            //  dd($id);
            $documents = Documents::find($id);
            if(!$documents) abort(404);

            
            $images = $documents->images;

            
            $pdf = $documents->pdf;


            if($documents->pdf){
             
                  return view('Acceuil.visualiserImage', compact('documents', 'pdf'))->with('message','pdf');

                
                }elseif ($documents->images) {
                    
                    return view('Acceuil.visualiserImage', compact('documents', 'images'))->with('message','images');
                } else {
                   
                    return redirect()->route('Students.viewdoc')->with('error', 'Type de fichier inconnu.');
            }
            
            // return view('Acceuil.visualiserImage',compact('documents','images'));
        }


        // Delete Doc
        public function delete($id)
        {
            
            Documents::find($id)->delete();
            $documents = Documents::all();
            return view('admin.Documents.delete',compact('documents'));
        }

        // Recuperer tous les images d'un Documents pour Afficher cote Administration
        public function viewIdImage($id)
        {
            $documents = Documents::find($id);
            
            if(!$documents) abort(404);
            
            $images = $documents->images;
            
            return view('admin.viewIdImage',compact('documents','images'));
        }


        // Telechargement Des Images du site

        function download($id)
        {
            
        }
        


        // Recherche par la barre de recherche
        function rechercher(Request $request)
        {
            $categorie = "ALL";
            $documents = Documents::where('datePublication','Like','%'.$request->search.'%')
            ->orWhere('description','Like','%'.$request->search.'%')
            ->orWhere('categorie','Like','%'.$categorie.'%')
            ->orWhere('niveauAcademique','Like','%'.$request->search.'%')
            ->orWhere('titre','Like','%'.$request->search.'%')
            ->paginate(8);
            return view('Acceuil.index',compact('documents'));   
        }

        function deletepage()
        {
            $documents = Documents::all();
            return view('admin.Documents.delete',compact('documents'));
        }

}