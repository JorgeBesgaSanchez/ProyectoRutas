@extends('plantillas.plantilla')

@section('contenido')
    <!-- Titulo de la página -->
    <h1>{{ $title = 'Editar Situadas' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('situadas.update', $situada->id) }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @method('PUT')
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">ID Provincia</label>
            <input type="text" name="id_provincia" class="form-control" id="id_provincia"
                   value="{{ $situada['id_provincia'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID zona</label>
            <input type="text" name="id_zona" class="form-control" id="id_zona" value="{{ $situada['id_zona'] }}">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="enviar" id="enviar" value="Actualizar Situadas"/>
            <a class="btn btn-warning" href="{{ route('situadas.index') }}">Volver al listado de Situadas</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

