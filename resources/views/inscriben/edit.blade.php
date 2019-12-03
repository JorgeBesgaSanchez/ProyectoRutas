@extends('plantillas.plantilla')

@section('contenido')
    <!-- Titulo de la página -->
    <h1>{{ $title = 'Editar Inscripción' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('inscriben.update', $inscriben->id) }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @method('PUT')
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo ID de actividad:</label>
            <input type="text" name="id_actividad" class="form-control" id="id_actividad"
                   value="{{ $inscriben['id_actividad'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo ID de usuario:</label>
            <input type="text" name="id_usuario" class="form-control" id="id_usuario"
                   value="{{ $inscriben['id_usuario'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nueva fecha: <strong>(AA-MM-DD hh:mm:ss)</strong></label>
            <input type="datetime-local" name="fecha_y_hora" class="form-control" id="fecha_y_hora"
                   value="{{ $inscriben['fecha_y_hora'] }}">
        </div>
        <div class="form-group">
            <input type="submit" name="enviar" id="enviar" value="Actualizar inscripción" class="btn btn-success"/>
            <a href="{{ route('inscriben.index' )}}" class="btn btn-warning">Volver</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection
