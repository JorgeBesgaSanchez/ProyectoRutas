@extends('plantillas.plantilla')

@section('contenido')
    <!-- Titulo de la página -->
    <h1>{{ $title = 'Editar Usuario' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('usuarios.update', $usuario->id) }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @method('PUT')
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $usuario['nombre'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">email</label>
            <input type="text" name="email" class="form-control" id="email" value="{{ $usuario['email'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Contraseña</label>
            <input type="password" name="contraseña" class="form-control" id="contraseña"
                   value="{{ $usuario['contraseña'] }}">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="enviar" id="enviar" value="Actualizar Usuario"/>
            <a class="btn btn-warning" href="{{ route('usuarios.index') }}">Volver al listado de Usuarios</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

