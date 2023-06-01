@extends('admin.main-layout')

@section('content')
    <div class="contanier">
        <div class="card">
            <div class="card-header">
                <h3> Nom : {{ $role -> name}} </h3>
                <h4> Slug  : {{ $role -> slug}} </h4>
            </div>
        </div>
        <div class="card-body">
            <div class="card-title">
                Permission
            </div>
            <p class="card-text">
                ...................
            </p>
        </div>
        <div class="card-footer">
            <a href="{{ url()->previous}}" class="btn btn-primary">Retour</a>
        </div>
    </div>

@endsection
