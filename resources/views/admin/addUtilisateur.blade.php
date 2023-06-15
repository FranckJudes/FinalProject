@extends('admin.main-layout')
@section('content')
<div class="row">
    <div class="col-12 mb-4">
      <div class="card border-0 shadow components-section">
        <form action="{{ route('addUser')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="row mb-12">
                
                    <div class="col-lg-12">

                                <div class="mb-4"><label for="titre">Name</label> <input type="text" class="form-control"
                                    id="name" name="name" aria-describedby="emailHelp"  value="{{old('name')}}" placeholder="name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="mb-4"><label for="titre">Last Name</label> <input type="text" class="form-control"
                                    id="name" name="lastname" aria-describedby="emailHelp"  value="{{old('lastname')}}" placeholder="lastname">
                                    @if ($errors->has('lastname'))
                                        <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                    @endif
                                </div>
                        
                                <div class="mb-3"><label for="exampleInputIconLeft">email</label>
                                    <div class="input-group"><input type="text" class="form-control" value="{{old('email')}}"  name="email" id="exampleInputIconLeft"
                                        placeholder="email" aria-label="Search">
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4"><label for="titre">password</label> <input type="password" class="form-control"
                                    id="name" name="password" aria-describedby="emailHelp" placeholder="password">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3"><label for="exampleInputIconLeft">confirmer Password</label>
                                    <div class="input-group"><input type="password" class="form-control" name="confirm_password" id="exampleInputIconLeft"
                                        placeholder="Confirm Password" aria-label="Search">
                                    </div>
                                    @if ($errors->has('confirm_password'))
                                            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                        <label class="my-1 me-2" for="state">Selectionner le role :</label>
                                         <select  id="role" 
                                            class="w-100" name="role">
                                            <option selected="selected">Choississez un role :</option>
                                            @foreach ($roles as $role )
                                                <option data-role-id="{{$role->id}}" data-role-slug="{{$role->slug}}" value="{{$role->id}}">
                                                    {{$role->name}}
                                                </option>   
                                            @endforeach
                                        </select>
                                 </div>
                                 <div class="mb-3" id="permissions_box">
                                        <div class="mb-3"><span class="h6 fw-bold">Selectionner Permission :</span></div>
                                        <div id="permissions_checkbox_list"></div>
                                </div>
                                <div class="mb-3">
                                    <input class="btn btn-primary" class="input-group" type="submit">
                                </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection


