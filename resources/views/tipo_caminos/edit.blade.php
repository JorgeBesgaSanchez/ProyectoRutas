@extends('plantillas.plantilla')

@section('contenido')
    <!-- Titulo de la página -->
    <h1>{{ $title = 'Editar Tipo caminos' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('tipo_caminos.update', $tipo_camino->id) }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @method('PUT')
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $tipo_camino['nombre'] }}">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="enviar" id="enviar" value="Actualizar Tipo camino"/>
            <a class="btn btn-warning" href="{{ route('tipo_caminos.index') }}">Volver al listado de Tipo caminos</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

