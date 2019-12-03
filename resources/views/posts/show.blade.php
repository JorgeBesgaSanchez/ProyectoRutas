@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title }}</h1>

    <div class="card">
        <h5 class="card-header">Texto del Post:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $post->texto }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">ID Usuario:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $post['id_usuario'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">ID Ruta:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $post['id_ruta'] }}</h5>
        </div>
    </div>

    <a href="{{ route('posts.index' )}}" class="btn btn-warning mt-3">Volver al listado de Post</a>

    @extends('plantillas.footer')

@endsection
