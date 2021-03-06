@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title }}</h1>

    <div class="card">
        <h5 class="card-header">Nombre de la dificultad:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $dificultade['nombre'] }}</h5>
        </div>
    </div>
    
    <a href="{{ route('dificultades.index' )}}" class="btn btn-warning mt-3">Volver al listado de dificultades</a>

    @extends('plantillas.footer')

@endsection
