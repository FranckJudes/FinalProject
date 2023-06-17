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
           <form action="" method="get">
               <div class="row">
                <div class="col-lg-3 pt-5"></div>
                   <div class="col-lg-6">
                       <div class="text-center text-white ">
                           <input type="search" name="search"  class="form-control border-success rounded-pill" placeholder="search"/>
                       </div>
                   </div>
               <div class="col-lg-3"></div>
               </div>   
               <div class="row text-center text-white">
                   <div class="col-lg-3"></div>
                        <div class="col-lg-3">
                            <label  class="form-label">En Fonction Date :</label>
                            <input type="date" name="datePublication" value="{{ Request::get('datePublication') ?? date('Y-m-d')}}" class="form-control">
                        </div>
                        <div class="col-lg-3">
                            <label  class="form-label">Selectionner la filiere :</label>
                                <select name="niveauAcademique"  class="form-control">
                                    <option value="">ALL</option>
                                    <option value="ICTL1"  {{ Request::get('niveauAcademique') == 'ICTL1' ? 'selected' : ''}}>ICTL1</option>
                                    <option value="ICTL2"  {{ Request::get('niveauAcademique') ==  'ICTL2' ? 'selected' : ''}}>ICTL2</option>
                                    <option value="ICTL3"  {{ Request::get('niveauAcademique') == 'ICTL3' ? 'selected' : ''}}>ICTL3</option>
                                    <option value="INFOL1" {{ Request::get('niveauAcademique') == 'INFOL1' ? 'selected' : ''}}>INFOL1</option>
                                    <option value="INFOL2" {{ Request::get('niveauAcademique') == 'INFOL2' ? 'selected' : ''}}>INFOL2</option>
                                    <option value="INFOL3" {{ Request::get('niveauAcademique') == 'INFOL3' ? 'selected' : ''}}>INFOL3</option>
                                    <option value="M1" {{ Request::get('niveauAcademique') == 'M1' ? 'selected' : ''}}>M1</option>
                                    <option value="M2" {{ Request::get('niveauAcademique') == 'M2' ? 'selected' : ''}}>M2</option>
        
                            </select>
                        </div>
                       <div class="col-lg-3"></div>
                   </div>
                   <div class="row mt-2">
                    <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <input type="submit" class="form-control" value="Rechercher">
                        </div>
                        <div class="col-lg-4"></div>
                   </div>
               </div> 
            </form> 
           
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