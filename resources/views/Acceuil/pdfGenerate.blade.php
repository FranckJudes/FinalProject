<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Babillard Numerique du departement Informatique</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <link href="{{'/css2/styles.css'}}" rel="stylesheet" />
    </head>
    <body>

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
    </body>
    

</html>




















