@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title }}</h1>

    <div class="card">
        <h5 class="card-header">ID provincia:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $situada['id_provincia'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Nombre:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $situada['id_zona'] }}</h5>
        </div>
    </div>

    <a href="{{ route('situadas.index' )}}" class="btn btn-warning mt-3">Volver al listado de Situadas</a>

    @extends('plantillas.footer')

@endsection
