@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title }}</h1>

    <div class="card">
        <h5 class="card-header">Nombre:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $usuario['nombre'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">email:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $usuario['email'] }}</h5>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Contraseña <strong>(encriptada)</strong>:</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $usuario['contraseña'] }}</h5>
        </div>
    </div>

    <a href="{{ route('usuarios.index' )}}" class="btn btn-warning mt-3">Volver al listado de Usuarios</a>

    @extends('plantillas.footer')

@endsection
