@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title = 'Crear Recorren nueva' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('recorren.store') }}" enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">ID ruta</label>
            <input type="text" name="id_ruta" class="form-control" id="id_ruta" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID camino</label>
            <input type="text" name="id_camino" class="form-control" id="id_camino" placeholder="">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="crear" id="crear" value="Crear"/>
            <a class="btn btn-warning" href="{{ route('recorren.index') }}">Volver al listado de Recorren</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

