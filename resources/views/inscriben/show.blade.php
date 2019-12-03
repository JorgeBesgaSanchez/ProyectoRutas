@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title }}</h1>

    <div class="card">
        <h5 class="card-header">ID de la actividad:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $inscriben['id_actividad'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">ID del Usuario:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $inscriben['id_usuario'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Fecha y hora</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $inscriben['fecha_y_hora'] }}</h5>
        </div>
    </div>

    <a href="{{ route('inscriben.index' )}}" class="btn btn-warning mt-3">Volver al listado de inscripciones</a>

    @extends('plantillas.footer')

@endsection
