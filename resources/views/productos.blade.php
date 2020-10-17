<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/entrada/estilos.css')}}">
    <link rel="stylesheet" href="../imagenes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entrada</title>
</head>

<body>
<section class="banner">

    <nav class="enc">
        <ul class="vent">
            <li class="view"><strong><a href="{{ route('welcome') }}">Inicio</a></strong></li>
            <li class="view"><strong><a href="">Contactanos</a></strong></li>
            <li class="view"><strong><a href="{{ route('login') }}">login</a></strong></li>
        </ul>
    </nav>

    <div class="banner-cont">
        <h1>Bienvenidos a Koko.swimwear</h1>
        <a href="#">Ver Productos</a>
    </div>
</section>

</body>
</html>
