@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title = 'Crear Actividad nueva' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('actividades.store') }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre de la Actividad</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="crear" id="crear" value="Crear"/>
            <a class="btn btn-warning" href="{{ route('actividades.index') }}">Volver al listado de Actividades</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

