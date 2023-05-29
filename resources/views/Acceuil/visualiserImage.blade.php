@extends('Acceuil.main-layout')
@section('content')
<div class="text-center mt-5">
    <a class="btn btn-primary large" href="{{url("/")}}">
        Retour
    </a>
</div>

<div class="container m-5">
    <div class="card">
        <div class="card-body">
            
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
    
@endsection