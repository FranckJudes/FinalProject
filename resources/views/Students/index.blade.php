<!doctype html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title>FAQs | Dason - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <!-- preloader css -->
        <link rel="stylesheet" href="{{asset('assets/css/preloader.min.css')}}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
             <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.svg" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Dason</span>
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.svg" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Dason</span>
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
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">Paul K.</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
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
                                <a href="index.html">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-apps">Apps</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="shopping-cart"></i>
                                    <span data-key="t-ecommerce">Ecommerce</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ecommerce-products.html" key="t-products">Products</a></li>
                                    <li><a href="ecommerce-add-product.html" data-key="t-add-product">Add Product</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="apps-chat.html">
                                    <i data-feather="message-square"></i>
                                    <span data-key="t-chat">Chat</span>
                                </a>
                            </li>
                            <li class="menu-title" data-key="t-pages">Pages</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="layers"></i>
                                    <span data-key="t-authentication">Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html" data-key="t-login">Login</a></li>
                                    <li><a href="auth-two-step-verification.html" data-key="t-two-step-verification">Two Step Verification</a></li>
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
                                    <h4 class="mb-sm-0 font-size-18">Accueil</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-lg-12">
                                        <div class="row justify-content-center mt-3">
                                            <div class="col-xl-5 col-lg-8">
                                                <div class="text-center">
                                                    <h5>Can't find what you are looking for?</h5>
                                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting language
                                                        is more simple and regular than that of the individual</p>
                                                    <div>
                                                        <button type="button" class="btn btn-primary mt-2 me-2 waves-effect waves-light">Email
                                                            Us</button>
                                                        <button type="button" class="btn btn-success mt-2 waves-effect waves-light">Send us a
                                                            tweet</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row mt-5">
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body overflow-hidden position-relative">
                                                        <div>
                                                            <i class="bx bx-help-circle widget-box-1-icon text-primary"></i>
                                                        </div>
                                                         <div class="d-flex">
                                                            <div class="faq-count">
                                                                <div class="avatar-sm m-auto">
                                                                    <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                                        1
                                                                    </span>
                                                                </div>
                                                             </div>
                                                             <div class="flex-1 ms-3">
                                                                <h5 class="mt-2">What is Lorem Ipsum?</h5>
                                                                <p class="text-muted mt-3 mb-0">New common language will be more simple and 
                                                                    regular than the existing European languages. It will be as simple as occidental.</p>

                                                                <div class="mt-4">
                                                                    <a href="#" class="text-primary fw-medium"> <u>Read More </u> <i class="mdi mdi-arrow-right ms-1 align-middle"></i></a>
                                                                </div>
                                                             </div>
                                                         </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body overflow-hidden position-relative">
                                                        <div>
                                                            <i class="bx bx-help-circle widget-box-1-icon text-primary"></i>
                                                        </div>
                                                         <div class="d-flex">
                                                            <div class="faq-count">
                                                                <div class="avatar-sm m-auto">
                                                                    <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                                        2
                                                                    </span>
                                                                </div>
                                                             </div>
                                                             <div class="flex-1 ms-3">
                                                                <h5 class="mt-2">Where does it come from?</h5>
                                                                <p class="text-muted mt-3 mb-0">Everyone realizes why a new common language would be 
                                                                    desirable one could refuse to pay expensive translators.</p>

                                                                <div class="mt-4">
                                                                    <a href="#" class="text-primary fw-medium"> <u>Read More </u> <i class="mdi mdi-arrow-right ms-1 align-middle"></i></a>
                                                                </div>
                                                             </div>
                                                         </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->
                            
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body overflow-hidden position-relative">
                                                        <div>
                                                            <i class="bx bx-help-circle widget-box-1-icon text-primary"></i>
                                                        </div>
                                                         <div class="d-flex">
                                                            <div class="faq-count">
                                                                <div class="avatar-sm m-auto">
                                                                    <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                                        3
                                                                    </span>
                                                                </div>
                                                             </div>
                                                             <div class="flex-1 ms-3">
                                                                <h5 class="mt-2">Where can I get some?</h5>
                                                                <p class="text-muted mt-3 mb-0">If several languages coalesce, the grammar of the 
                                                                    resulting language is more simple and regular than that of the individual languages.</p>

                                                                <div class="mt-4">
                                                                    <a href="#" class="text-primary fw-medium"> <u>Read More </u> <i class="mdi mdi-arrow-right ms-1 align-middle"></i></a>
                                                                </div>
                                                             </div>
                                                         </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xl-4 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body overflow-hidden position-relative">
                                                        <div>
                                                            <i class="bx bx-help-circle widget-box-1-icon text-primary"></i>
                                                        </div>
                                                         <div class="d-flex">
                                                            <div class="faq-count">
                                                                <div class="avatar-sm m-auto">
                                                                    <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                                        4
                                                                    </span>
                                                                </div>
                                                             </div>
                                                             <div class="flex-1 ms-3">
                                                                <h5 class="mt-2">Why do we use it?</h5>
                                                                <p class="text-muted mt-3 mb-0">Their separate existence is a myth. For science, music,
                                                                    sport, etc, Europe uses the same vocabulary.</p>

                                                                <div class="mt-4">
                                                                    <a href="#" class="text-primary fw-medium"> <u>Read More </u> <i class="mdi mdi-arrow-right ms-1 align-middle"></i></a>
                                                                </div>
                                                             </div>
                                                         </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->
                            
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body overflow-hidden position-relative">
                                                        <div>
                                                            <i class="bx bx-help-circle widget-box-1-icon text-primary"></i>
                                                        </div>
                                                         <div class="d-flex">
                                                            <div class="faq-count">
                                                                <div class="avatar-sm m-auto">
                                                                    <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                                        5
                                                                    </span>
                                                                </div>
                                                             </div>
                                                             <div class="flex-1 ms-3">
                                                                <h5 class="mt-2">Where can I get some?</h5>
                                                                <p class="text-muted mt-3 mb-0">The point of using Lorem Ipsum is that it has a 
                                                                    more-or-less normal they distribution of letters opposed to using content here.</p>

                                                                <div class="mt-4">
                                                                    <a href="#" class="text-primary fw-medium"> <u>Read More </u> <i class="mdi mdi-arrow-right ms-1 align-middle"></i></a>
                                                                </div>
                                                             </div>
                                                         </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->
                            
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body overflow-hidden position-relative">
                                                        <div>
                                                            <i class="bx bx-help-circle widget-box-1-icon text-primary"></i>
                                                        </div>
                                                         <div class="d-flex">
                                                            <div class="faq-count">
                                                                <div class="avatar-sm m-auto">
                                                                    <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                                        6
                                                                    </span>
                                                                </div>
                                                             </div>
                                                             <div class="flex-1 ms-3">
                                                                <h5 class="mt-2">What is Lorem Ipsum?</h5>
                                                                <p class="text-muted mt-3 mb-0">To an English person, it will seem like simplified English,
                                                                    as a skeptical Cambridge friend of mine told me what Occidental</p>

                                                                <div class="mt-4">
                                                                    <a href="#" class="text-primary fw-medium"> <u>Read More </u> <i class="mdi mdi-arrow-right ms-1 align-middle"></i></a>
                                                                </div>
                                                             </div>
                                                         </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row g-0 align-items-center mb-4">
                            <div class="col-sm-6">
                                <div>
                                    <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-end">
                                    <ul class="pagination mb-sm-0">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

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
