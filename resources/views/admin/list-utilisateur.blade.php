@extends('admin.main-layout')

@section('content')

<table class="table user-table table-hover align-items-center">
    <thead>
      <tr>
        <th class="border-bottom">name</th>
        <th class="border-bottom">email</th>
        <th class="border-bottom">Role</th>
        <th class="border-bottom">Permisssion</th>
        <th class="border-bottom">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($utilisateurs as $item )   
      <tr> 
        <td><span class="fw-normal">{{$item->name}}</span></td>
        <td><span class="fw-normal">{{$item->email}}</span></td>
        <td><span class="fw-normal">
            @foreach ($item->roles as $role)
                {{$role->name}}
            @endforeach  
        
        </span></td>
        <td>
            @foreach ($item->permissions as $role)
                <span class="btn btn-danger">
                  {{$role->name}}
                </span>
             @endforeach  
        </td>
        <td>
          <div class="btn-group"><button
              class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"><svg class="icon icon-xs" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                </path>
              </svg> <span class="visually-hidden">Toggle Dropdown</span></button>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                <a class="dropdown-item d-flex align-items-center" href="{{url('updateID',$item->id)}}">
                    <svg
                        class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                        <path fill-rule="evenodd"
                             d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                             clip-rule="evenodd">
                        </path>
                    </svg>
                     Update 
                 </a>
            </div>
          </div>

          <a href="{{url("removeUser",$item->id)}}">
            <svg class="icon icon-xs text-danger ms-1" href="{{url('removeUser',$item->id)}}" title="Delete" data-bs-toggle="tooltip"
              fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                clip-rule="evenodd"></path>
            </svg>
          </a>
        
        </td>
      </tr>
    @endforeach    
    </tbody>
  </table>

@endsection
