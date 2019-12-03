@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->
    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('posts.create') }}">Crear Post</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">Texto</th>
            <th scope="col">ID usuario</th>
            <th scope="col">Nombre usuario</th>
            <th scope="col">ID ruta</th>
            <th scope="col">Nombre ruta</th>
            <th scope="col">Fecha y hora</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($posts as $post)
            <tr>
                <td scope="row">
                    <textarea class="form-control" rows="4" readonly>{{ $post->texto }}</textarea></td>
                <td scope="row">{{ $post->id_usuario }}</td>
                <td scope="row">{{ $post->getNombreUsuario($post->id_usuario) }}</td>
                <td scope="row">{{ $post->id_ruta }}</td>
                <td scope="row">{{ $post->getNombreUsuario($post->id_usuario) }}</td>
                <td scope="row">{{ $post->fecha_y_hora }}</td>
                <td>
                    <form name="foo" action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-success">Detalles</a>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Actualizar</a>
                        <input type="submit" value="Borrar   " class="btn btn-danger">
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td>No hay post registrados</td>
            </tr>

        @endforelse
        </tbody>
    </table>

    <p></p>

    {{ $posts->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

