@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title }}</h1>

    <div class="card">
        <h5 class="card-header">Nombre:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $tipo_camino['nombre'] }}</h5>
        </div>
    </div>

    <a href="{{ route('tipo_caminos.index' )}}" class="btn btn-warning mt-3">Volver al listado de Tipo camino</a>

    @extends('plantillas.footer')

@endsection
