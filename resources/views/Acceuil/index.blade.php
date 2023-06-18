@extends('Acceuil.main-layout')
@section('content')
<section class="py-5">
    <div class="row-8">
        <div class="col">
            <form class="d-flex input-group w-auto"> 
        </div>
        
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          {{-- @forelse ($documents as $document) --}}
          @foreach ($documents as $document)

            @php
                    $images = $document->images;
            @endphp
                <div class="col mb-5">
                    <div class="card h-100">
                            <img class="card-img-top" src="Documents_images/{{$images->first()->image}}" alt="..." /> 
                        <div class="card-body p-4">
                            <div class="text-center">
                             
                                <h5 class="fw-bolder">{{ $document->titre}}</h5>
                              
                                    {{$document->categorie}}
                                    <p>{{$document->niveauAcademique}}</p>
                                    {{$document->datePublication}}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{url('viewID',$document->id)}}">Visualiser</a></div>
                        </div>
                    </div>
                </div>
            {{-- @empty
                   <h3> AUCUN DOCUMENTS POUR CE QUE VOUS CHERCHER</h3> --}}
             {{-- @endforelse --}}
            @endforeach 
                </div>
            </div>
        </div>
                
        {{ $documents->links() }}
    </div>
</section>
    
@endsection

