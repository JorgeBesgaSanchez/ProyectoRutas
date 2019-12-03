@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title }}</h1>

    <div class="card">
        <h5 class="card-header">Nombre:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $zona['nombre'] }}</h5>
        </div>
    </div>

    <a href="{{ route('zonas.index' )}}" class="btn btn-warning mt-3">Volver al listado de Zonas</a>

    @extends('plantillas.footer')

@endsection
