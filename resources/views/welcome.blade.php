<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Koko</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/tienda.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-xl-11 d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="">koko.swimwear <img src="img/logo.jpeg" alt=""></a></h1>
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="{{ route('login') }}">Inicio Sesion</a></li>
                        <li><a href="#about">Quienes Somos</a></li>
                        <li><a href="#services">Producto</a></li>
                        <li><a href="#contact">Contactanos</a></li>

                    </ul>
                </nav><!-- .nav-menu -->
            </div>
        </div>

    </div>
</header><!-- End Header -->

<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style="background-image: url(assets/img/intro-carousel/f1.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Ropa a tu estilo</h2>
                            <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Comencemos</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/f2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Ropa a tu estilo</h2>
                            <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Comencemos</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/f3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Ropa a tu estilo</h2>
                            <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Comencemos</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/f4.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Ropa a tu estilo</h2>
                            <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Comencemos</a>
                        </div>
                    </div>
                </div>



            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- End Intro Section -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Quienes Somos</h3>
                <p style="text-align: justify">Somos una empresa creada para complacer a nuestro cliente, ofrecer
                    diferentes tipos de traje de baño respecto al diseño de tu preferencia, puedes escoger el
                    tipo de panty que desees (hilo, semi hilo, tanga, cachetero) en cualquier diseño de enterizo,
                    todo tipo de top dependiendo de la contextura de tu cuerpo, tenemos una alta gama de estampanos
                    de trajes de baño y pantalonetas ademas de ello tenemos a tu disposición enterizos para tu
                    preferencia,con la mas alta calidad al mejor precio, siempre tratando de tener modelaje que
                    este al corriente con lo último de la moda, para que así pueda desarrolar sus actividad
                    cotidianas luciendo su belleza.</p>
            </header>
        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
        <div class="container" data-aos="fade-up">

            <header class="section-header wow fadeInUp">
                <h3>Productos</h3>
                <p>Ofrecemos diversos tipos de ropa con diseño de tu preferencia y a tu estilo.</p>
            </header>

            <div class="container-sm" style="width:60%">
                <div class="row">
                    <div class="col-lg-12 col-md-12 box" data-aos="fade-up" data-aos-delay="100">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                                Tipos de Ropa
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Enterizos</a>
                            <a href="#" class="list-group-item list-group-item-action">Conjuntos de Pareja</a>
                            <a href="#" class="list-group-item list-group-item-action">Bikinis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3 class="section-title">Algunos Productos</h3>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100"">
            <div class=" col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Todos</li>
                    <li data-filter=".filter-app">Desktop</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="assets/img/portfolio/escritorio1.png" class="img-fluid" alt="">
                        <a href="assets/img/portfolio/escritorio1.png" class="link-preview venobox" data-gall="portfolioGallery" title="App 1"><i class="ion ion-eye"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Comiditas</a></h4>
                        <p>Sistema de comidas a domicilio</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="assets/img/portfolio/web1.png" class="img-fluid" alt="">
                        <a href="assets/img/portfolio/web1.png" class="link-preview venobox" data-gall="portfolioGallery" title="Web 3"><i class="ion ion-eye"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Secure Pendrive</a></h4>
                        <p>Sistema de seguridad para memorias</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="assets/img/portfolio/web2.png" class="img-fluid" alt="">
                        <a href="assets/img/portfolio/web2.png" class="link-preview venobox" data-gall="portfolioGallery" title="Web 2"><i class="ion ion-eye"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Farmacia Center</a></h4>
                        <p>Ordena tus medicamentos</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="assets/img/portfolio/web4.png" class="img-fluid" alt="">
                        <a href="assets/img/portfolio/web4.png" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Red Social</a></h4>
                        <p>Comparte fotos con tus amigos</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="assets/img/portfolio/web3.png" class="img-fluid" alt="">
                        <a href="assets/img/portfolio/web3.png" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Mundial</a></h4>
                        <p>Datos sobre el mundial 2018</p>
                    </div>
                </div>
            </div>

        </div>


    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h3>Contactanos</h3>
                <p>Cualquier duda o sugerencia </p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-social-whatsapp-outline"></i>
                        <h3>Contaco Directo</h3>
                        <p><a target="_blank" href="https://api.whatsapp.com/send?phone=57320452172">Link Chat</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Celular</h3>
                        <p><a href="">3204521723</a></p>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">koko.swimwear@gmail.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Porfavor Escribe un Nombre" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Porfavor Escribe un Email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Porfavor Escribe un Asunto" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Porfavor Escribe un Mensaje" placeholder="Mensaje"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Cargando</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Tu Mensaje a Sido Enviado!</div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                </form>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="copyright">
                    &copy; Copyright <strong>koko.swimwear</strong>. All Rights Reserved
                </div>
            </div>
            <div style="padding-top:30px " class="col">
                <div class="container">
                    <h6 style="display: inline-block;margin-right: 10%">Redes Sociales:</h6>
                    <a style="margin-right: 10%"href="#" class="twitter"><i class="fa fa-twitter fa-lg"></i></a>
                    <a style="margin-right: 10%"href="#" class="facebook"><i class="fa fa-facebook fa-lg"></i></a>
                    <a style="margin-right: 10%"href="#" class="instagram"><i class="fa fa-instagram fa-lg"></i></a>
                    <a style="margin-right: 10%"href="#" class="google-plus"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a style="margin-right: 10%"href="#" class="linkedin"><i class="fa fa-linkedin fa-lg"></i></a>
                </div>
            </div>
        </div>


    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


<!-- Vendor JS Files -->
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
