@extends('plantillas.plantilla')

@section('contenido')
    <!-- Titulo de la página -->
    <h1>{{ $title = 'Editar Actividad' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('actividades.update', $actividade->id) }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @method('PUT')
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo nombre:</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $actividade['nombre'] }}">
        </div>
        <div class="form-group">
            <input type="submit" name="enviar" id="enviar" value="Actualizar actividad" class="btn btn-success"/>
            <a href="{{ route('actividades.index' )}}" class="btn btn-warning">Volver</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection
