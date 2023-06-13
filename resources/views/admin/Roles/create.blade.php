@extends('admin.main-layout')

@section('content')

<div class="row">
    <div class="col-12 mb-4">
      <div class="card border-0 shadow components-section">
        <form action="{{ url('/roles')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row mb-12">
                
                    <div class="col-lg-12 col-sm-6">

                        <div class="mb-4"><label for="titre">Name</label> 
                            <input type="text" class="form-control" id="name" name="role_name" aria-describedby="emailHelp" placeholder="role_name" value="{{old('role_name')}}">
                            @if ($errors->has('role_name'))
                                <span class="text-danger">{{ $errors->first('role_name') }}</span>
                            @endif
                        </div>

                        <div class="mb-4"><label for="titre">slug</label> <input type="text" class="form-control"
                            id="role_slug" name="role_slug" aria-describedby="emailHelp" placeholder="role_slug" value="{{old('role_slug')}}">
                            @if ($errors->has('role_slug'))
                                <span class="text-danger">{{ $errors->first('role_slug') }}</span>
                            @endif
                        </div>
                        <div class="mb-4"><label for="titre">Add Permission</label> 
                            <input type="text" class="form-control"  name="roles_permission" data-role="tagsinput">
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
