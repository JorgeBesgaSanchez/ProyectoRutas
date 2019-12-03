@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title }}</h1>

    <div class="card">
        <h5 class="card-header">ID Ruta:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $recorren['id_ruta'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">ID Camino:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $recorren['id_camino'] }}</h5>
        </div>
    </div>

    <a href="{{ route('recorren.index' )}}" class="btn btn-warning mt-3">Volver al listado de recorren</a>

    @extends('plantillas.footer')

@endsection
