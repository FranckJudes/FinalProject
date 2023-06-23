@extends('admin.main-layout')
@section('content')
<div class="row">
    <div class="col-12 mb-4">
      <div class="card border-0 shadow components-section">
        <form action="{{url('upload')}}" method="post" enctype="multipart/form-data">
         @csrf
            <div class="card-body">
                <div class="row mb-6">
                
                    <div class="col-lg-6 col-sm-6">

                    <div class="mb-4"><label for="titre">Titre</label> <input type="text" class="form-control"
                        id="name" name="titre" aria-describedby="emailHelp" placeholder="Titre">
                        @if ($errors->has('titre'))
                            <span class="text-danger">{{ $errors->first('titre') }}</span>
                        @endif
                    </div>
                        <div class="mb-3"><label for="exampleInputIconLeft">Autheur</label>
                            <div class="input-group"><input type="text" class="form-control" name="autheur" id="exampleInputIconLeft" 
                                placeholder="Autheur" aria-label="Search" value="{{auth()->guard('utilisateur')->user()->name." ".auth()->guard('utilisateur')->user()->lastname}}">
                            </div>
                            @if ($errors->has('autheur'))
                            <span class="text-danger">{{ $errors->first('autheur') }}</span>
                            @endif
                        </div>
                        <div class="my-4"><label for="textarea">Description</label> <textarea class="form-control"
                            placeholder="Entrez la description du document." name="description" id="textarea" rows="4"></textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="mb-4"><label class="my-1 me-2" for="country">niveau Academique</label> <select class="form-select"
                            id="country" aria-label="Default select example" name="niveauAcademique">
                            <option selected="selected" disabled>Niveau Academique</option>
                            <option>ICTL1</option>
                            <option>ICTL2</option>
                            <option>ICTL3</option>
                            <option>INFOL1</option>
                            <option>INFOL2</option>
                            <option>INFOL3</option>
                            <option>M1</option>
                            <option>M2</option>
                        </select>
                        @error('niveauAcademique')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                        <div class="mb-4"><label class="my-1 me-2" for="country">Categorie du Documents</label> <select class="form-select"
                            id="country" aria-label="Default select example" name="categorie">
                            <option selected="selected" disabled>Open this select menu</option>
                            <option>Emploi de Temps</option>
                            <option>Communique</option>
                            <option>Notes</option>
                            <option>Liste Admin</option>
                            <option>Liste de Selection</option>
                            <option>Annonces</option>
                            <option>Avis de Recherche</option>
                            </select>
                            @error('categorie')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3"><label for="formFile" class="form-label">Selectionnner les Documents</label> <input
                            class="form-control" type="file" name="images[]"  accept="image/*" multiple id="formFile">
                            @error('images')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        </div>
                        <input class="btn btn-primary" type="submit" value="sauvegarder">
                    </div>
                </div>
        
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection