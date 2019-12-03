@extends('plantillas.plantilla')

@section('contenido')
    <!-- Titulo de la página -->
    <h1>{{ $title = 'Editar Recorren' }}</h1>

    <!-- Formulario -->

    <form name="crear" method="POST" action="{{ route('recorren.update', $recorren->id) }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @method('PUT')
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo ID Ruta:</label>
            <input type="text" name="id_ruta" class="form-control" id="id_ruta" value="{{ $recorren['id_ruta'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo ID camino:</label>
            <input type="text" name="id_camino" class="form-control" id="id_camino"
                   value="{{ $recorren['id_camino'] }}">
        </div>
        <div class="form-group">
            <input type="submit" name="enviar" id="enviar" value="Actualizar recorren" class="btn btn-success"/>
            <a href="{{ route('recorren.index' )}}" class="btn btn-warning">Volver</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection
