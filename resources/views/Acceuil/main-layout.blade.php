<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Babillard Numerique du departement Informatique</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{'/css2/styles.css'}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ url('/')}}">BABILLARD NUMERIQUE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        
                    </ul>
                    <form class="d-flex">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('login')}}">Admin Login</a></li>
                            </ul>
                        </li>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">UNIVERSITE DE YAOUNDE I</h1>
                    <p class="lead fw-normal text-white-50 mb-0">DEPARTEMENT INFORMATIQUE - FACULTES DES SCIENCES</p>
                </div>
            </div>
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white ">
                    <input type="search" name="search"  class="form-control border-success rounded-pill" placeholder="search"/>
                </div>
            </div>
           
        </header>
        

        <!-- Section-->

        @yield('content')

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{'/js1/scripts.js'}}"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
    </body>
    <script>
        const sr = ScrollReveal();
        sr.reveal('H1,p ',{
            origin : "top",  
            distance : "50px",
            duration :2000,
            scale : 0.5,
            reset : true
            });
     

            sr.reveal('.card',{
                depay : 1000
            },800)
    </script>

</html>