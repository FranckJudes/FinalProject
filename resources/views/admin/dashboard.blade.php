@extends('admin.main-layout')

@section('content')
  <div class="row">
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="row d-block d-xxl-flex align-items-center">
            <div class="col-12 col-xxl-6 px-xxl-0 mb-3 mb-xxl-0">
              <div id="chart-customers"></div>
            </div>
            <div class="col-12 col-xxl-6 ps-xxl-4 pe-xxl-0">
              <h2 class="fs-5 fw-normal mb-1">Users</h2>
              <h3 class="fw-extrabold mb-1">{{$countUtilisateur}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="row d-block d-xxl-flex align-items-center">
            <div class="col-12 col-xxl-6 px-xxl-0 mb-3 mb-xxl-0">
              <div id="chart-revenue"></div>
            </div>
            <div class="col-12 col-xxl-6 ps-xxl-4 pe-xl-0">
              <h2 class="fs-5 fw-normal mb-1">Documents</h2>
              <h3 class="fw-extrabold mb-1">{{$countDocuments}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-xl-4 mb-4">
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="row d-block d-sm-flex d-xl-block d-xxl-flex align-items-center">
            <div class="col-12 col-sm-6 col-xl-12 col-xxl-6 px-xxl-0 mb-3 mb-sm-0 mb-xl-3 mb-xxl-0">
              <div id="chart-users"></div>
            </div>
            <div class="col-12 col-sm-6 col-xl-12 col-xxl-6 ps-xxl-4 pe-xxl-0">
              <h2 class="fs-5 fw-normal mb-1">Roles</h2>
              <h3 class="fw-extrabold mb-1">{{$countRole}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
