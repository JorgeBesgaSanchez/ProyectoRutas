@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title = 'Crear Usuario nuevo' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('usuarios.store') }}" enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Contraseña</label>
            <input type="password" name="contraseña" class="form-control" id="contraseña" placeholder="">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="crear" id="crear" value="Crear"/>
            <a class="btn btn-warning" href="{{ route('usuarios.index') }}">Volver al listado de Usuarios</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

