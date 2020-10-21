<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home Koko</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/tienda.png" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">


    <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet"> <!--load all styles -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body style="background:  #defcff  ">

<!-- ======= Header ======= -->
<header style="padding: 12px 5px;background: #1d68a7;" id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-xl-11 d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="">koko.swimwear <img src="img/logo.jpeg" alt=""></a></h1>
                <nav class="nav-menu d-none d-lg-block">
                    <ul class="navbar-nav ml-auto">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a style="color: black"class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </ul>
                </nav><!-- .nav-menu -->
            </div>
        </div>

    </div>
</header><!-- End Header -->


<div style="margin-top:80px "class="container-fluid">
        <div class="container" style="margin-top: 8%">
            <div class="row">
                <div class="col-sm">
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                            <h5 class="card-title">Hola, ¿Que deseas hacer?</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Acciones</h6>
                            <p class="card-text">Selecciona la opcion que deseas realizar</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="" class="card-link">Productos</a>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button  type="button" class="btn btn-info">Listar</button>
                                        <button onclick="loadAgregar()" type="button" class="btn btn-secondary">Agregar</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="card-link">Informacion empresa</a>
                                    <button type="button" class="btn btn-success">Actualizar Informacion</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="" class="card-link">Categorias</a>
                                    <button onclick="loadCategoria()" type="button" class="btn btn-secondary" style="width: 80%">Agregar</button>
                                </div>
                                <div class="col-6">
                                    <a href="" class="card-link">Marcas</a>
                                    <button onclick="loadMarca()" type="button" class="btn btn-secondary" style="width: 80%">Agregar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div style="margin-left: 7%" class="col-sm">
                        <div class="container">
                            <div id="contenedor">
                                <div id="mayor" class="card" style="width: 22rem; -webkit-box-shadow: 0px 3px 23px 0px rgba(0,0,0,0.75);-moz-box-shadow: 0px 3px 23px 0px rgba(0,0,0,0.75);box-shadow: 0px 3px 23px 0px rgba(0,0,0,0.75);">
                                    <img src="{{asset('img/logo.jpeg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Una empresa con estilo...</p>
                                    </div>
                                </div>
                             </div>
                         </div>
                     </div>
            </div>
        </div>
</div>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<!-- Footer -->
<footer style="background-color: black; bottom: 0px ; position: fixed; width: 100%"bclass="page-footer font-small blue row">
    <!-- Copyright -->
    <div style="color:white"class="footer-copyright text-center py-3">
        &copy; Copyright <strong>koko.swimwear</strong>. All Rights Reserved
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->


<!-- Vendor JS Files -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<script src="assets/js/main.js"></script>

</body>

</html>
