@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title = 'Crear Ruta nueva' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('rutas.store') }}" enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Desnivel</label>
            <input type="text" name="desnivel" class="form-control" id="desnivel" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Sugerencias</label>
            <input type="text" name="sugerencias" class="form-control" id="sugerencias" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Cartografia</label>
            <input type="text" name="cartografia" class="form-control" id="cartografia" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID camino</label>
            <input type="text" name="id_camino" class="form-control" id="id_camino" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID Dificultad</label>
            <input type="text" name="id_dificultad" class="form-control" id="id_dificultad" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID zona</label>
            <input type="text" name="id_zona" class="form-control" id="id_zona" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID actividad</label>
            <input type="text" name="id_actividad" class="form-control" id="id_actividad" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Fecha</label>
            <input type="date" name="fecha" class="form-control" id="fecha" placeholder="">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="crear" id="crear" value="Crear"/>
            <a class="btn btn-warning" href="{{ route('rutas.index') }}">Volver al listado de Rutas</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

