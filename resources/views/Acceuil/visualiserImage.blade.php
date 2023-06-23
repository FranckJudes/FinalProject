<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Babillard Numerique du departement Informatique</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder"> <i class="fa-solid fa-clipboard"></i> UNIVERSITE DE YAOUNDE I</h1>
                    <p class="lead fw-normal text-white-50 mb-0">DEPARTEMENT INFORMATIQUE - FACULTES DES SCIENCES</p>
                </div>
            </div>
          
        </header>
        

        <!-- Section-->

        <div class="text-center mt-5">
            <a class="btn btn-primary rounded-pill btn-lg btn-block" href="{{url("/")}}">
                <i class="fa-solid fa-left-long"></i>  Retour
            </a>
        </div>
        <div class="container bg-secondary  rounded shadow p-2 mb-2 mt-2">
            <div class="row text-white">
                <div class="col-12 col-md-4 col-xl-6 mb-md-0">
                    Titre :     <p>{{ $documents->titre }}</p>
                    Date Publication :     <p>{{ $documents->datePublication }}</p>
                    Autheur :     <p>{{ $documents->autheur }}</p>
                    Niveau Academique :     <p>{{ $documents->niveauAcademique }}</p>
                    Description :     <p>{{ $documents->description }}</p>
                </div>
                <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
                    <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
                      
                        <li class="list-inline-item px-0 px-sm-2">
                            <a class="btn btn-primary" href="{{url('download',$documents->id)}}"> Download</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container rounded shadow p-5 mb-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-4">
                        @foreach ($images as $image)
                            <div class="card text-white bg-secondary m-3 text-center" style="max-width:40em;">
                                <div class="">
                                    <img src="/Documents_images/{{$image->image}}" class="card-img-top text-center">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#div1').hide(); 

            var display = 0;

            $('#show').click(function(){

               if (display == 0){

                $('#div2').hide(); 
                $('#div1').show(); 
                display = 1;
               }else{

                $('#div2').show(); 
                $('#div1').hide(); 
                display = 0;
               }
            });
        });

    </script>

</html>




















