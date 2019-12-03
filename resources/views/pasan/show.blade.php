@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title }}</h1>

    <div class="card">
        <h5 class="card-header">ID Ruta</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $pasan['id_ruta'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">ID Toponimo:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $pasan['id_toponimo'] }}</h5>
        </div>
    </div>

    <a href="{{ route('pasan.index' )}}" class="btn btn-warning mt-3">Volver al listado de pasan</a>

    @extends('plantillas.footer')

@endsection
