@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title }}</h1>

    <div class="card">
        <h5 class="card-header">ID Ruta:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $ruta['id'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Nombre:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $ruta['nombre'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Desnivel:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $ruta['desnivel'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Sugerencias:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $ruta['sugerencias'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Cartografía:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $ruta['cartografia'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">ID Camino:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $ruta['id_camino'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">ID Dificultad:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $ruta['id_dificultad'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">ID Zona:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $ruta['id_zona'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">ID Actividad:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $ruta['id_actividad'] }}</h5>
        </div>
    </div>

    <a href="{{ route('rutas.index' )}}" class="btn btn-warning mt-3">Volver al listado de Rutas</a>

    @extends('plantillas.footer')

@endsection
