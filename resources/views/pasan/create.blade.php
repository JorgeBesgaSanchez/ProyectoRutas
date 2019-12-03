@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title = 'Crear Pasan nueva' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('pasan.store') }}" enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">ID ruta</label>
            <input type="text" name="id_ruta" class="form-control" id="id_ruta" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID toponimo</label>
            <input type="text" name="id_toponimo" class="form-control" id="id_toponimo" placeholder="">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="crear" id="crear" value="Crear"/>
            <a class="btn btn-warning" href="{{ route('pasan.index') }}">Volver al listado de Pasan</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

