@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title = 'Crear Situadas nueva' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('situadas.store') }}" enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">ID Provincia</label>
            <input type="text" name="id_provincia" class="form-control" id="id_provincia" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID zona</label>
            <input type="text" name="id_zona" class="form-control" id="id_zona" placeholder="">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="crear" id="crear" value="Crear"/>
            <a class="btn btn-warning" href="{{ route('situadas.index') }}">Volver al listado de Situadas</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

