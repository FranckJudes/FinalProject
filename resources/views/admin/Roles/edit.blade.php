@extends('admin.main-layout')

@section('content')
<div class="row">
    <div class="col-12 mb-4">
      <div class="card border-0 shadow components-section">
        <p>Mettre a Jour</p>
        <form action="/roles/{{$role->id}}" method="post">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="row mb-12">
                
                    <div class="col-lg-12 col-sm-6">

                        <div class="mb-4"><label for="titre">Role du nom</label> <input type="text" class="form-control"
                            id="name" name="name" aria-describedby="emailHelp"  value="{{ $role->name}}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="mb-4"><label for="titre">le Slug du nom</label> <input type="text" class="form-control"
                            id="name" name="slug" aria-describedby="emailHelp" value="{{ $role->name}}">
                            @if ($errors->has('lastname'))
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            @endif
                        </div>
                        <div class="mb-4"><label for="titre">Add la Permission</label> <input type="text" class="form-control"
                            id="name" name="permission" aria-describedby="emailHelp" name="roles_permisssion" value="">
                            @if ($errors->has('lastname'))
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            @endif
                        </div>  
                        <input class="btn btn-primary" type="submit">
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>


@endsection


