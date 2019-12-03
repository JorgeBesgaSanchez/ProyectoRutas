@extends('plantillas.plantilla')

@section('contenido')
    <!-- Titulo de la página -->
    <h1>{{ $title = 'Editar Provincia' }}</h1>

    <!-- Formulario -->

    <form name="crear" method="POST" action="{{ route('provincias.update', $provincia->id) }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @method('PUT')
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo ID de provincia:</label>
            <input type="text" name="id_provincia" class="form-control" id="id_provincia"
                   value="{{ $provincia['id_provincia'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo nombre:</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $provincia['nombre'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo ID de comunidad:</label>
            <input type="text" name="id_comunidad" class="form-control" id="id_comunidad"
                   value="{{ $provincia['id_comunidad'] }}">
        </div>
        <div class="form-group">
            <input type="submit" name="enviar" id="enviar" value="Actualizar provincia" class="btn btn-success"/>
            <a href="{{ route('provincias.index' )}}" class="btn btn-warning">Volver</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection
