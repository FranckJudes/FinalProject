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
                
                    <div class="col-lg-12">

                        <div class="mb-4"><label for="titre">Role du nom</label> <input type="text" class="form-control"
                            id="role_name" name="role_name" aria-describedby="emailHelp"  value="{{ $role->name}}">
                            @if ($errors->has('role_name'))
                                <span class="text-danger">{{ $errors->first('role_name') }}</span>
                            @endif
                        </div>

                        <div class="mb-4"><label for="titre">le Slug du nom</label> <input type="text" class="form-control"
                            id="role_slug" name="role_slug" aria-describedby="emailHelp" value="{{ $role->slug}}">
                            @if ($errors->has('role_slug'))
                                <span class="text-danger">{{ $errors->first('role_slug') }}</span>
                            @endif
                        </div>
                        <div class="mb-4"><label for="titre">Add Permission</label> 
                            <input type="text" class="form-control" aria-describedby="emailHelp"  name="roles_permission" data-role="tagsinput" value="@foreach ($role->permissions as $permission){{$permission->name. ","}} @endforeach">
                                
                            
                            @if ($errors->has('roles_permission'))
                                <span class="text-danger">{{ $errors->first('roles_permission') }}</span>
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


