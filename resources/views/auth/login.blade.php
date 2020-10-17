<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/login/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="icon"   href="{{asset('img/tienda.png')}}" type="image/png" />
    <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet"> <!--load all styles -->
    <title>Inicio sesión</title>

</head>
<body>
<section class="fondo_principal">
    <article class="fondo_dos">
        <img src="{{asset('img/women.jpg')}}" alt="user">
        <h3 class="inicio_titulo">Iniciar Sesión</h3>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="entrada"><i style="padding: 10px;" class="fas fa-user"></i><input class="inp form-control {{ $errors->has('login') ? ' is-invalid' : '' }}" value="{{ old('login') }}" type="login" name="login"  placeholder="usuario o correo"></div>
            @if ($errors->has('login'))
                <span style="padding: 10px;display: block" class="invalid-feedback" role="alert">
                        <strong style="color: #d6d8d9">{{ $errors->first('login') }}</strong>
                        </span>
            @endif


            <div class="entrada"><i style="padding: 10px;" class="fas fa-key"></i><input class="inp form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password') }}" type="password" name="password"  placeholder="contraseña"></div>
            @if ($errors->has('password'))
                <span style="padding: 10px;display: block" class="invalid-feedback" role="alert">
                        <strong style="color: #d6d8d9">{{ $errors->first('password') }}</strong>
                        </span>
            @endif

            <input class="boton_inicio" type="submit" name="inicio" value="Ingresar">
        </form>

    </article>
</section>
</body>
</html>

