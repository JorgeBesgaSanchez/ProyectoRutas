<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/singin.css') }}" rel="stylesheet">

</head>

<body class="container-fluid d-flex flex-column h-100">

<div class="container-fluid"><!-- CONTAINER FLUIDO BARRA PRINCIPAL -->
    <!--BARRA PRINCIPAL -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('inicio' )}}">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('datos' )}}">Datos prácticos<span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('senderos' )}}">Senderos<span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('deportes' )}}">Actividades<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('registro' )}}"><strong>Registrate</strong><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('login' )}}"><strong>Logeate</strong><span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <!--FIN BARRA PRINCIPAL -->
</div><!-- FIN CONTAINER FLUIDO BARRA PRINCIPAL -->

<div class="container-fluid text-center mt-5">

    <!-- Formulario -->
    <form class="form-signin" name="crear" method="POST" action="{{ route('paginas.store') }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @csrf

        <img class="mb-4" src="{{ asset('img/logos/logo-traspies.png') }}" alt="" width="300">
        <h1 class="h3 mb-3 font-weight-normal">Por favor, registrese</h1>

        <label for="inputNombre" class="sr-only">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required autofocus>

        <label for="inputEmail" class="sr-only">Dirección de correo electrónico</label>
            <input type="email" name="email" id="email" class="form-control mt-2" placeholder="Email" required autofocus>

        <label for="inputPassword" class="sr-only">Contraseña</label>
            <input type="password" name="contraseña" id="contraseña" class="form-control mt-2" placeholder="Contraseña" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>
