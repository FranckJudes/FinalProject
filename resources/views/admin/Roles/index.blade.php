@extends('admin.main-layout')

@section('content')
      <a href="{{ url("roles/create")}}" class="btn btn-primary">Ajouter Un Role</a>
<table class="table user-table table-hover align-items-center">
    <thead>
      <tr>
        <th class="border-bottom">ID</th>
        <th class="border-bottom">Role</th>
        <th class="border-bottom">slug</th>
        <th class="border-bottom">Permission</th>
        <th class="border-bottom">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($roles as $item )   
      <tr> 
        <td><span class="fw-normal">{{$item->id}}</span></td>
        <td><span class="fw-normal">{{$item->name}}</span></td>
        <td><span class="fw-normal">{{$item->slug}}</span></td>
        <td><span class="fw-normal">
          
          @if ($item->permissions != null)

            @foreach ($item->permissions as $permission)
              <span class="btn btn-primary">
                   {{$permission->name}}
              </span>  
            @endforeach
          @else
          @endif
        </span></td>
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
                <a class="dropdown-item d-flex align-items-center" href="/roles/{{ $item->id}}/edit">
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
               
                 <form method="post" action="/roles/{{$item->id}}">
                  @method('DELETE')
                  @csrf
                    <input type="hidden" name="role_id"  value="">
                        <button class="dropdown-item d-flex align-items-center">
                            <svg
                                class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                <path fill-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                            Supprimer 
                        </button>
                </form>    
            </div>
          </div>
      </tr>
    @endforeach    
    </tbody>
  </table>


@endsection
