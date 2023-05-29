@extends('admin.main-layout')
@section('content')
<div class="row">
    <div class="col-12 mb-4">
      <div class="card border-0 shadow components-section">
           
            <div class="card-body">
                <div class="row mb-12">
                                    Titre :     <p>{{ $documents->titre }}</p>
                                    Date Publication :     <p>{{ $documents->datePublication }}</p>
                                    Autheur :     <p>{{ $documents->autheur }}</p>
                                    Niveau Academique :     <p>{{ $documents->niveauAcademique }}</p>
                                    Description :     <p>{{ $documents->description }}</p>
                                <div class="row mt-4">
                                    @foreach ($images as $image)
                                        <div class="card text-white bg-secondary m-3 text-center" style="max-width:40em;">
                                            <div class="">
                                                <img src="/Documents_images/{{$image->image}}" class="card-img-top text-center">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>   
                </div>
            </div>
      </div>
    </div>
  </div>

@endsection