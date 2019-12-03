@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title }}</h1>

    <div class="card">
        <h5 class="card-header">Nombre de la actividad:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $actividade['nombre'] }}</h5>
        </div>
    </div>

    <a href="{{ route('actividades.index' )}}" class="btn btn-warning mt-3">Volver al listado de actividades</a>

    @extends('plantillas.footer')

@endsection



