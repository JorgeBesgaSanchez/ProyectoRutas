<!doctype html>
<!-- PLANTILLA.BLADE.PHP -->
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="icon" href="favicon.ico"/>

    <!-- muestro el título si no es null, si es null, página inicio -->
    @if(! empty($title))
    <title>{{ $title }}</title>
    @else
    <title>Inicio</title>
    @endif

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer-navbar/">

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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<!-- -------- BODY -------- -->
<body class="container-fluid d-flex flex-column h-100">

<div class="container-fluid"><!-- CONTAINER FLUIDO BARRA PRINCIPAL -->
    <!--BARRA PRINCIPAL -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
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
                    <a class="nav-link" href="{{ route('registro' )}}"><strong>Registrate</strong><span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('login' )}}"><strong>Logeate</strong><span
                                class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item active float-right">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </li>


            </ul>
        </div>
    </nav>
    <!--FIN BARRA PRINCIPAL -->
</div><!-- FIN CONTAINER FLUIDO BARRA PRINCIPAL -->

<div class="container-fluid"><!-- CONTAINER FLUIDO CON BARRA ADMIN Y CONTENIDO -->
    <div class="row"><!-- CONTENEDOR FILA CON BARRA ADMIN Y CONTENIDO -->


        @if(1)
        <!--BARRA ADMIN -->
        <!--Vertical-->
        <div class="col-2"><!-- CONTENEDOR COLUMNA BARRA ADMIN -->
            <ul class="nav flex-column navbar-light bg-light" style="color:##6d909f">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('actividades.index' )}}">Actividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comunidades.index' )}}">Comunidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dificultades.index' )}}">Dificultades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inscriben.index' )}}">inscriben</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pasan.index' )}}">Pasan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index' )}}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('provincias.index' )}}">Provincias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('recorren.index' )}}">Recorren</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rutas.index' )}}">Rutas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('situadas.index' )}}">Situadas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tipo_caminos.index' )}}">Tipo caminos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tipo_marchas.index' )}}">Tipo marchas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('toponimos.index' )}}">Toponimos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuarios.index' )}}">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('zonas.index' )}}">Zonas</a>
                </li>
            </ul>
        </div><!-- FIN DEL CONTENEDOR <div class="col-2"> DE LA COLUMNA ADMIN -->
        <!--FIN BARRA ADMIN -->
        @endif


        <div class="col-10 mt-5"><!-- CONTENEDOR COLUMNA CONTENIDO PRINCIPAL -->
            <!-- Zona de mensajes -->
            @if(Session::has('message'))
            <div class="container mt-3">
                <p class="alert alert-info">{{Session::get('message') }}</p>
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $miError)
                    <li>{{$miError}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!---------- CONTENIDO ---------->
            <div class="container">
                @yield('contenido')
            </div>

        </div><!-- CIERRE DEL DIV COLUMNA CONTENIDO PRINCIPAL-->
    </div><!-- CIERRE DEL CONTENEDOR FILA CON BARRA ADMIN Y CONTENIDO -->
</div><!-- FIN CONTAINER FLUIDO CON BARRA ADMIN Y CONTENIDO -->

<!-- yield (footer') EN PLANTILLA.BLADE.PHP -->
@yield('footer')


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
<!-- FIN PLANTILLA.BLADE.PHP -->







