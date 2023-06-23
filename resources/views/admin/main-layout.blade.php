<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Dasboard</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="title" content="Volt Premium Bootstrap Dashboard - Transactions">
    <meta name="author" content="Themesberg">
    <meta name="description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard">
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="og:title" content="Volt Premium Bootstrap Dashboard - Transactions">
    <meta property="og:description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="og:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="twitter:title" content="Volt Premium Bootstrap Dashboard - Transactions">
    <meta property="twitter:description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="twitter:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">
    <link rel="apple-touch-icon" sizes="120x120"
        href="https://demo.themesberg.com/volt-pro/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://demo.themesberg.com/volt-pro/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://demo.themesberg.com/volt-pro/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://demo.themesberg.com/volt-pro/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="https://demo.themesberg.com/volt-pro/assets/img/favicon/safari-pinned-tab.svg"
        color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link type="text/css" href="https://demo.themesberg.com/volt-pro/vendor/sweetalert2/dist/sweetalert2.min.css"
        rel="stylesheet">
    <link type="text/css" href="https://demo.themesberg.com/volt-pro/vendor/notyf/notyf.min.css" rel="stylesheet">
    <link type="text/css" href="https://demo.themesberg.com/volt-pro/vendor/fullcalendar/main.min.css" rel="stylesheet">
    <link type="text/css" href="https://demo.themesberg.com/volt-pro/vendor/apexcharts/dist/apexcharts.css"
        rel="stylesheet">
    <link type="text/css" href="https://demo.themesberg.com/volt-pro/vendor/dropzone/dist/min/dropzone.min.css"
        rel="stylesheet">
    <link type="text/css"
        href="https://demo.themesberg.com/volt-pro/vendor/choices.js/public/assets/styles/choices.min.css"
        rel="stylesheet">
    <link type="text/css" href="https://demo.themesberg.com/volt-pro/vendor/leaflet/dist/leaflet.css" rel="stylesheet">
    <link type="text/css" href="https://demo.themesberg.com/volt-pro/css/volt.css" rel="stylesheet">
   
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-141734189-6');
    </script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-THQTXJ7');
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" >
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-tagsinput.css')}}">  
    <style>
            .label-info{
                background-color: rgb(0, 173, 241);
                padding: 2px;
                border-radius: 2px; 
            }
    </style>    
</head>

<body><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THQTXJ7" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none"><a class="navbar-brand me-lg-5"
            href="https://demo.themesberg.com/volt-pro/index.html"><img class="navbar-brand-dark"
                src="https://demo.themesberg.com/volt-pro/assets/img/brand/light.svg" alt="Volt logo"> <img
                class="navbar-brand-light" src="https://demo.themesberg.com/volt-pro/assets/img/brand/dark.svg"
                alt="Volt logo"></a>
        <div class="d-flex align-items-center"><button class="navbar-toggler d-lg-none collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>
    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div class="user-card d-flex d-md-none justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="avatar-lg me-4"><img
                            src="https://demo.themesberg.com/volt-pro/assets/img/team/profile-picture-3.jpg"
                            class="card-img-top rounded-circle border-white" alt="Bonnie Green"></div>
                    <div class="d-block">
                        <h2 class="h5 mb-3">Hi, Jane</h2><a href="examples/sign-in.html"
                            class="btn btn-secondary btn-sm d-inline-flex align-items-center"><svg
                                class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg> Sign Out</a>
                    </div>
                </div>
                <div class="collapse-close d-md-none"><a href="#sidebarMenu" data-bs-toggle="collapse"
                        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                        aria-label="Toggle navigation"><svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></a></div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}"
                            class="nav-link d-flex align-items-center"><span class="sidebar-icon"><img
                                    src="https://demo.themesberg.com/volt-pro/assets/img/brand/light.svg" height="20"
                                    width="20" alt="Volt Logo"> </span><span class="mt-1 sidebar-text">Admin-Babillard</span>
                    </a>
                </li>
                <ul class="flex-column nav"> 
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard')}}"><span
                        class="sidebar-text-contracted">G</span> <span
                        class="sidebar-text">Dashboard</span></a>
                    </li>
                </ul>

                <li class="nav-item"><span class="nav-link collapsed d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#submenu-app"><span><span class="sidebar-icon"><svg
                                    class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                        clip-rule="evenodd"></path>
                                </svg> </span><span class="sidebar-text">Utilisateurs</span> </span><span
                            class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg></span></span>
                    <div class="multi-level collapse" role="list" id="submenu-app" aria-expanded="false">
                        <ul class="flex-column nav">
                            <li class="nav-item"><a class="nav-link" href="{{ route('ajoutUtilisateur')}}"><span
                                        class="sidebar-text-contracted">G</span> <span
                                        class="sidebar-text">Gestions utilisateurs</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route ('list-utilisateur')}}"><span
                                        class="sidebar-text-contracted">L</span> <span class="sidebar-text">Listes Les Utilisateurs</span></a></li>
                                        
                        </ul>
                    </div>
                </li>

               
                <li class="nav-item">
                    <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#submenu-components"><span><span
                                class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                                    <path fill-rule="evenodd"
                                        d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg> </span><span class="sidebar-text">Importation</span> </span><span
                            class="link-arrow">
                            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd">
                                </path>
                            </svg></span>
                    </span>
                    <div class="multi-level collapse" role="list" id="submenu-components" aria-expanded="false">
                        <ul class="flex-column nav">
                          @if (auth()->guard('utilisateur')->user()->can('create','App\\Models\Documents'))

                                <li class="nav-item"><a class="nav-link" href="{{url('addDocument')}}"><span
                                            class="sidebar-text-contracted">F</span> <span
                                            class="sidebar-text">Ajout Documents</span></a>
                                </li>

                            @endif
                            @if (auth()->guard('utilisateur')->user()->can('read','App\\Models\Documents')) 
                                <li class="nav-item"><a class="nav-link" href="{{ url('historiqueDoc')}}"><span
                                            class="sidebar-text-contracted">H</span> <span
                                            class="sidebar-text">Historique Documents</span></a>
                                </li>
                            @endif
                            @if (auth()->guard('utilisateur')->user()->can('delete','App\\Models\Documents'))
                                <li class="nav-item"><a class="nav-link" href="{{ url('deletepage')}}"><span
                                    class="sidebar-text-contracted">S</span> <span
                                    class="sidebar-text">Supprimer Documents</span></a>
                                </li>
                            @endif  
                            @if (auth()->guard('utilisateur')->user()->can('update','App\\Models\Documents'))
                                <li class="nav-item"><a class="nav-link" href="{{ url('deletepage')}}"><span
                                    class="sidebar-text-contracted">M</span> <span
                                    class="sidebar-text">Mette a jour</span></a>
                                </li>
                            @endif    
                        </ul>
                    </div>  
                </li>
                         @if (auth()->guard('utilisateur')->user()->roles->contains('slug', 'admin'))
                            <li class="nav-item"><a href="{{ route('roles.index')}}"
                                class="nav-link d-flex align-items-center justify-content-between"><span><span class="sidebar-icon"><svg
                                    class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                    </path>
                                    </svg> </span><span class="sidebar-text">Role et Permission</span></span></a>
                            </li>
                         @endif   
                
            </ul>
            
        </div>
        
    </nav>
    <main class="content">
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <button id="sidebar-toggle"
                            class="sidebar-toggle me-3 btn btn-icon-only d-none d-lg-inline-block align-items-center justify-content-center"><svg
                                class="toggle-icon" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </button>
                        <form class="navbar-search form-inline" id="navbar-search-main">
                            <div class="input-group input-group-merge search-bar"><span class="input-group-text"
                                    id="topbar-addon"><svg class="icon icon-xs"
                                        x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg> </span><input type="text" class="form-control" id="topbarInputIconLeft"
                                    placeholder="Search" aria-label="Search" aria-describedby="topbar-addon"></div>
                        </form>
                    </div>
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown ms-lg-3"><a class="nav-link dropdown-toggle pt-1 px-0" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="media d-flex align-items-center"><img class="avatar rounded-circle"
                                        alt="Image placeholder"
                                        src="https://demo.themesberg.com/volt-pro/assets/img/team/profile-picture-3.jpg">
                                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block"><span
                                            class="mb-0 font-small fw-bold text-gray-900">{{auth()->guard('utilisateur')->user()->name." ".auth()->guard('utilisateur')->user()->lastname}}</span></div>
                                </div>
                            </a>
                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1"><a
                                    class="dropdown-item d-flex align-items-center" href="#"><svg
                                        class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                            clip-rule="evenodd"></path>
                                    </svg> My Profile </a>
                                <div role="separator" class="dropdown-divider my-1"></div>
                                <form action="{{route('logout')}}"  method="post">
                                    @method('delete')
                                    @csrf   
                                        <button
                                            class="dropdown-item d-flex align-items-center"><svg
                                                class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                </path>
                                            </svg> Logout
                                        </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item"><a href="#"><svg class="icon icon-xxs" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg></a></li>
                        <li class="breadcrumb-item"><a href="#">Volt</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Transactions</li>
                    </ol>
                </nav>
               
               
            </div>
            <div class="btn-toolbar mb-2 mb-md-0"><a href="#"
                    class="btn btn-sm btn-gray-800 d-inline-flex align-items-center"><svg class="icon icon-xs me-2"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg> New Plan</a>
                <div class="btn-group ms-2 ms-lg-3"><button type="button"
                        class="btn btn-sm btn-outline-gray-600">Share</button> <button type="button"
                        class="btn btn-sm btn-outline-gray-600">Export</button></div>
            </div>
        </div>
        <div class="table-settings mb-4">
            <div class="row align-items-center justify-content-between">
                <div class="col col-md-6 col-lg-3 col-xl-4">
                   
                </div>
                
               
            </div>
        </div>

        @yield('content')


        <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                    <p class="mb-0 text-center text-lg-start">© 2022-<span class="current-year"></span> <a
                            class="text-primary fw-normal" href="#" target="_blank">Universite de Ngoa Ekele</a>
                    </p>
                </div>
                <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
                    <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
                      
                        <li class="list-inline-item px-0 px-sm-2"><a href="#">Version 1.1</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </main>
   
    
</body>

    <script src="https://demo.themesberg.com/volt-pro/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/countup.js/dist/countUp.umd.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/apexcharts/dist/apexcharts.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/simple-datatables/dist/umd/simple-datatables.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/fullcalendar/main.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/dropzone/dist/min/dropzone.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/notyf/notyf.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/leaflet/dist/leaflet.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/svg-pan-zoom/dist/svg-pan-zoom.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/svgmap/dist/svgMap.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/vendor/sortablejs/Sortable.min.js"></script>
    <script async defer="defer" src="https://buttons.github.io/buttons.js"></script>
    <script src="https://demo.themesberg.com/volt-pro/assets/js/volt.js"></script>
    <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'7bea8b69fecb37c7',m:'IAgCiaZoNWWDhnjBLxp0y6G1F3MOwFGEuNT4ZAj8aP4-1682634989-0-AYsT+4oIBMG7qoz/4XOeaT6KDlEpZS8274bLsYK705MN',u:'/cdn-cgi/challenge-platform/h/g'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='https://demo.themesberg.com/cdn-cgi/challenge-platform/scripts/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.nonce = '';
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7bea8b69fecb37c7","version":"2023.3.0","r":1,"b":1,"token":"3a2c60bab7654724a0f7e5946db4ea5a","si":100}'
        crossorigin="anonymous">
    </script>

  
    <script src="{{asset('assets/js/bootstrap-tagsinput.js')}}"></script>
    <script>
       
        $(document).ready(function(){
            $('#role_name').keyup(function(e){
                var str = $('#role_name').val();
                str =  str.replace(/\W+(?!$)/g,'-').toLowerCase();
                $('#role_slug').val(str);
                $('#role_slug').attr('placeholder',str);
            });
        });

    </script>

    <script>

      
        $(document).ready(function(){
            var permission_box = $('#permissions_box');
            var permisssions_checkbox_list = $('#permissions_checkbox_list');
            
            permission_box.hide();

            $('#role').on('change', function(){
                var role = $(this).find(':selected');
                var role_id = role.data('role-id');
                var role_slug = role.data('role-slug');
                 console.log(role_id);
                permisssions_checkbox_list.empty();

                $.ajax({
                    url: "/ajoutUtilisateur",
                    method: "get",
                    dataType: 'json',
                    data:{
                        role_id : role_id,
                        role_slug : role_slug,
                    }
                }).done(function(data){
                    console.log(data);

                    permission_box.show(data);

                    $.each(data,function(index,element)
                    {
                        $(permisssions_checkbox_list).append(
                            `<div class="custom-control custom-checkbox">
                                <input class="form-check-input" type="checkbox" value="`+ element.id+`" id="defaultCheck10" name="permissions[]">
                                 <label class="form-check-label" for="`+ element.slug +`"> `+element.name+`</label>
                            </div>`
                        );
                    });
                });

            });
        });
    </script>

</body>

</html> 







