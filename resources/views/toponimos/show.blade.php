@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title }}</h1>

    <div class="card">
        <h5 class="card-header">Nombre:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $toponimo['nombre'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">ID Provincia:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $toponimo['id_provincia'] }}</h5>
        </div>
    </div>

    <a href="{{ route('toponimos.index' )}}" class="btn btn-warning mt-3">Volver al listado de Toponimos</a>

    @extends('plantillas.footer')

@endsection
