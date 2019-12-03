@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title = 'Crear Tipo marcha nueva' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('tipo_marchas.store') }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="crear" id="crear" value="Crear"/>
            <a class="btn btn-warning" href="{{ route('tipo_marchas.index') }}">Volver al listado de Tipo marchas</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

