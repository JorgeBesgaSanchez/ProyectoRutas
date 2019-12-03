@extends('plantillas.plantilla')

@section('contenido')
    <!-- Titulo de la página -->
    <h1>{{ $title = 'Editar Ruta' }}</h1>

    <!-- Formulario -->

    <form name="crear" method="POST" action="{{ route('rutas.update', $ruta->id) }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @method('PUT')
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $ruta['nombre'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Desnivel</label>
            <input type="text" name="desnivel" class="form-control" id="desnivel" value="{{ $ruta['desnivel'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Sugerencias</label>
            <input type="text" name="sugerencias" class="form-control" id="sugerencias"
                   value="{{ $ruta['sugerencias'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Cartografia</label>
            <input type="text" name="cartografia" class="form-control" id="cartografia"
                   value="{{ $ruta['cartografia'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID camino</label>
            <input type="text" name="id_camino" class="form-control" id="id_camino" value="{{ $ruta['id_camino'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID Dificultad</label>
            <input type="text" name="id_dificultad" class="form-control" id="id_dificultad"
                   value="{{ $ruta['id_dificultad'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID zona</label>
            <input type="text" name="id_zona" class="form-control" id="id_zona" value="{{ $ruta['id_zona'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID actividad</label>
            <input type="text" name="id_actividad" class="form-control" id="id_actividad"
                   value="{{ $ruta['id_actividad'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Fecha</label>
            <input type="date" name="fecha" class="form-control" id="fecha" value="{{ $ruta['fecha'] }}"">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="enviar" id="enviar" value="Actualizar Ruta"/>
            <a class="btn btn-warning" href="{{ route('rutas.index') }}">Volver al listado de Rutas</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

