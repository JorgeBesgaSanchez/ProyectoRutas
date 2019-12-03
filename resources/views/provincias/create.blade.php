@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title = 'Crear Provincia nueva' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('provincias.store') }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">ID provincia</label>
            <input type="text" name="id_provincia" class="form-control" id="id_provincia" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID Comunidad</label>
            <input type="text" name="id_comunidad" class="form-control" id="id_comunidad" placeholder="">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="crear" id="crear" value="Crear"/>
            <a class="btn btn-warning" href="{{ route('provincias.index') }}">Volver al listado de Provincias</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

