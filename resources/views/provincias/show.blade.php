@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title }}</h1>

    <div class="card">
        <h5 class="card-header">ID provincia:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $provincia['id_provincia'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Nombre:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $provincia['nombre'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">ID Comunidad:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $provincia['id_comunidad'] }}</h5>
        </div>
    </div>

    <a href="{{ route('provincias.index' )}}" class="btn btn-warning mt-3">Volver al listado de Provincias</a>

    @extends('plantillas.footer')

@endsection
