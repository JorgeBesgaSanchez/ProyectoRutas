@extends('plantillas.plantilla')

@section('contenido')
    <!-- Titulo de la página -->
    <h1>{{ $title = 'Editar Dificultad' }}</h1>

    <!-- Formulario-->
    <form name="crear" method="POST" action="{{ route('dificultades.update', $dificultade->id) }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @method('PUT')
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo nombre:</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $dificultade['nombre'] }}">
        </div>
        <div class="form-group">
            <input type="submit" name="enviar" id="enviar" value="Actualizar dificultad" class="btn btn-success"/>
            <a href="{{ route('dificultades.index' )}}" class="btn btn-warning">Volver</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection
