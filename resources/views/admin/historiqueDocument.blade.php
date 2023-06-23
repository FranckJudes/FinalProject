


@extends('admin.main-layout')

@section('content')

<table class="table user-table table-hover align-items-center">
    <thead>
      <tr>
        
        <th class="border-bottom">Titre</th>
        <th class="border-bottom">Description</th>
        <th class="border-bottom">Date Publie</th>
        <th class="border-bottom">Nbre Image</th>
        <th class="border-bottom">Autheur</th>
        <th class="border-bottom">Niveau Academique</th>
        <th class="border-bottom">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($documents as $item )   
      <tr> 
        <td><span class="fw-normal">{{$item->titre}}</span></td>
        <td><span class="fw-normal">{{$item->description}}</span></td>
        <td><span class="fw-normal">{{$item->datePublication}}</span></td>
        <td><span class="fw-normal">{{$item->images->count()}}</span></td>
        <td><span class="fw-normal">{{$item->autheur}}</span></td>
        <td><span class="fw-normal">{{$item->niveauAcademique}}</span></td>
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
                <a class="dropdown-item d-flex align-items-center" href="{{url('viewIdImage',$item->id)}}">
                    <svg
                        class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                        <path fill-rule="evenodd"
                             d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                             clip-rule="evenodd">
                        </path>
                    </svg>
                     View Details
                 </a>
            </div>
          </div>
        </td>
      </tr>
    @endforeach    
    </tbody>
  </table>

@endsection
