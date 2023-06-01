@extends('Acceuil.main-layout')
@section('content')
<section class="py-5">
    <div class="row-8">
        <div class="col">
            <form class="d-flex input-group w-auto"> 
        </div>
        
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($documents as $document)
            @php
                    $image = $document->images;
            @endphp
                <div class="col mb-5">
                    <div class="card h-100">
                        @foreach ($image as $images)
                            <img class="card-img-top" src="Documents_images/{{$image}}" alt="..." />
                        @endforeach
                        <div class="card-body p-4">
                            <div class="text-center">
                             
                                <h5 class="fw-bolder">{{ $document->titre}}</h5>
                              
                                    {{$document->description}}
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
            @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection