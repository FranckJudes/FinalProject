<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard Student</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
       
        <link rel="stylesheet" href="{{asset('assets/css/preloader.min.css')}}" type="text/css" />

       
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">


            <div id="layout-wrapper">
    
                
                <header id="page-topbar">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="{{ route('dashboardStudent')}}" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.svg" alt="" height="30">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Dashboard</span>
                                    </span>
                                </a>
    
                                <a href="{{ route('dashboardStudent')}}" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.svg" alt="" height="30">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Dashboard</span>
                                    </span>
                                </a>
                            </div>
    
                            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
    
                        </div>
    
                        <div class="d-flex">
    
                            <div class="dropdown d-inline-block d-lg-none ms-2">
                                <button type="button" class="btn header-item" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i data-feather="search" class="icon-lg"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-search-dropdown">
            
                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">
    
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="dropdown d-none d-sm-inline-block">
                                <button type="button" class="btn header-item" id="mode-setting-btn">
                                    <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                                    <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                                </button>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item right-bar-toggle me-2">
                                    <i data-feather="settings" class="icon-lg"></i>
                                </button>
                            </div>
    
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    
                                    <span class="d-none d-xl-inline-block ms-1 fw-medium">
                                        {{auth()->guard('student')->user()->name." ".auth()->guard('student')->user()->lastname}}
    
                                    </span>
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <form  action="{{route('logout')}}"  method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="dropdown-item"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</button>
    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- ========== Left Sidebar Start ========== -->
                <div class="vertical-menu">

                    <div data-simplebar class="h-100">
    
                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
                            <!-- Left Menu Start -->
                            <ul class="metismenu list-unstyled" id="side-menu">
                                <li class="menu-title" data-key="t-menu">Menu</li>
    
                                <li>
                                    <a href="{{ route('dashboardStudent')}}">
                                        <i data-feather="layers"></i>
                                        <span data-key="t-dashboard">Dashboard</span>
                                    </a>
                                </li>
    
                                <li class="menu-title" data-key="t-apps">Apps</li>
    
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <i data-feather="layers"></i>
                                        <span data-key="t-ecommerce">Options</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="#" key="t-products">Comptes</a></li>
                                        <li><a href="#" data-key="t-add-product">Mise a jour</a></li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="apps-chat.html">
                                        <i data-feather="message-square"></i>
                                        <span data-key="t-chat">Notification</span>
                                    </a>
                                </li>
                                <li class="menu-title" data-key="t-pages">Pages</li>
    
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <i data-feather="layers"></i>
                                        <span data-key="t-authentication">Authentication</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <form  action="{{route('logout')}}"  method="post">
                                            @method('delete')
                                            @csrf
                                            <li><a href="auth-login.html" data-key="t-login">Deconnecter</a></li>
                                        </form>   
                                    </ul>
                                </li>
                            </ul>
    
                          
                        </div>
                        <!-- Sidebar -->
                    </div>
                </div>
    
                <div class="main-content">

                    <div class="page-content">
                        <div class="container-fluid">
    
                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0 font-size-18">{{ $document->titre}}</h4>
    
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                                <li class="breadcrumb-item active">Form Editors</li>
                                            </ol>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->
    
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-9">

                                                    <h4 class="card-title">{{ $document->niveauAcademique}}</h4>
                                                    <p class="card-title-desc">{{ $document->description}}</p>
                                                </div>
                                                <div class="col-3">

                                                    <div class="d-grid gap-3">
                                                        <a type="button"  href="{{ url('download-document',$document->id) }}" class="btn btn-primary btn-lg waves-effect waves-light">   <i class="mdi mdi-download d-block font-size-8">Telecharger</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex justify-content-center">
                                        @if (isset($message))    
                                            @if ($message === 'pdf')
                                                    <iframe src="{{ asset('storage/' . $pdf->path) }}" width="100%" height="500px"></iframe>
                                            @elseif ($message === 'images')   
                                                @foreach ($images as $image) 
                                    
                                                    <iframe src="/Documents_images/{{$image->image}}"  width="70%" height="900px">

                                                @endforeach
                                            @endif
                                        @endif
                                            <div id="ckeditor-classic"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            
                        </div> <!-- container-fluid -->
                    </div>
                    <!-- End Page-content -->
    
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <script>document.write(new Date().getFullYear())</script> © Dason.
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-sm-end d-none d-sm-block">
                                        Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- end main content-->
    
            </div>
            <!-- END layout-wrapper -->
    
            
            <!-- Right Sidebar -->
            <div class="right-bar">
                <div data-simplebar class="h-100">
                    <div class="rightbar-title d-flex align-items-center bg-dark p-3">
    
                        <h5 class="m-0 me-2 text-white">Theme Customizer</h5>
    
                        <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                            <i class="mdi mdi-close noti-icon"></i>
                        </a>
                    </div>
    
                    <!-- Settings -->
                    <hr class="m-0" />
    
                    <div class="p-4">
                        <h6 class="mb-3">Layout</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout"
                                id="layout-vertical" value="vertical">
                            <label class="form-check-label" for="layout-vertical">Vertical</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout"
                                id="layout-horizontal" value="horizontal">
                            <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                        </div>
    
                        <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>
    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-mode"
                                id="layout-mode-light" value="light">
                            <label class="form-check-label" for="layout-mode-light">Light</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-mode"
                                id="layout-mode-dark" value="dark">
                            <label class="form-check-label" for="layout-mode-dark">Dark</label>
                        </div>
    
                        <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>
    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-width"
                                id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                            <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-width"
                                id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed'),document.body.setAttribute('data-sidebar-size', 'sm')">
                            <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                        </div>
    
                        <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>
    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-position"
                                id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                            <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-position"
                                id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                            <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                        </div>
    
                        <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>
    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="topbar-color"
                                id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                            <label class="form-check-label" for="topbar-color-light">Light</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="topbar-color"
                                id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                            <label class="form-check-label" for="topbar-color-dark">Dark</label>
                        </div>
    
                        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>
    
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                            <label class="form-check-label" for="sidebar-size-default">Default</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                            <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                            <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                        </div>
    
                        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>
    
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                            <label class="form-check-label" for="sidebar-color-light">Light</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                            <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                            <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                        </div>
    
                        <h6 class="mt-4 mb-3 pt-2">Direction</h6>
    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-direction"
                                id="layout-direction-ltr" value="ltr">
                            <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-direction"
                                id="layout-direction-rtl" value="rtl">
                            <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                        </div>
    
                    </div>
    
                </div> <!-- end slimscroll-menu-->
            </div>
            <!-- /Right-bar -->
    
            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>
    
            <!-- JAVASCRIPT -->
            <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
            <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
            <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
            <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
            <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
            <!-- pace js -->
            <script src="{{asset('assets/libs/pace-js/pace.min.js')}}"></script>
    
            <script src="{{asset('assets/js/app.js')}}"></script>
    
        </body>

</html>
