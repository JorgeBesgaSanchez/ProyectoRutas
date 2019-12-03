@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title = 'Crear Zona nueva' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('zonas.store') }}" enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="crear" id="crear" value="Crear"/>
            <a class="btn btn-warning" href="{{ route('zonas.index') }}">Volver al listado de Zonas</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

