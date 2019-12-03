@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->
    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('tipo_caminos.create') }}">Crear Tipo camino</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">ID Tipo camino</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($caminos as $camino)
            <tr>
                <td scope="row">{{ $camino->id }}</td>
                <td scope="row">{{ $camino->nombre }}</td>
                <td>
                    <form name="foo" action="{{ route('tipo_caminos.destroy', $camino) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('tipo_caminos.show', $camino) }}" class="btn btn-success">Detalles</a>
                        <a href="{{ route('tipo_caminos.edit', $camino) }}" class="btn btn-warning">Actualizar</a>
                        <input type="submit" value="Borrar" class="btn btn-danger">
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td>No hay tipos de caminos registrados</td>
            </tr>

        @endforelse
        </tbody>
    </table>

    <p></p>

    {{ $caminos->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

