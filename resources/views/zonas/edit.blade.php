@extends('plantillas.plantilla')

@section('contenido')
    <!-- Titulo de la página -->
    <h1>{{ $title = 'Editar Zona' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('zonas.update', $zona->id) }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @method('PUT')
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $zona['nombre'] }}">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="enviar" id="enviar" value="Actualizar Zona"/>
            <a class="btn btn-warning" href="{{ route('zonas.index') }}">Volver al listado de Zonas</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

