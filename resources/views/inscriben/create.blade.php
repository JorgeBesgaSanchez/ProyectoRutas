@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title = 'Crear Inscripción nueva' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('inscriben.store') }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">ID de la actividad</label>
            <input type="text" name="id_actividad" class="form-control" id="id_actividad" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID del usuario</label>
            <input type="text" name="id_usuario" class="form-control" id="id_usuario" placeholder="">
            <div class="form-group">
                <label for="formGroupExampleInput">Fecha: <strong>(AA-MM-DD hh:mm:ss)</strong></label>
                <input type="datetime-local" name="fecha_y_hora" class="form-control" id="fecha_y_hora" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="crear" id="crear" value="Crear"/>
            <a class="btn btn-warning" href="{{ route('inscriben.index') }}">Volver al listado de Inscripciones</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

