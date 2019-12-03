@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->
    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('provincias.create') }}">Crear Provincia</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">ID provincia</th>
            <th scope="col">Nombre</th>
            <th scope="col">ID comunidad</th>
            <th scope="col">Nombre comunidad</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($provincias as $provincia)
            <tr>
                <td scope="row">{{ $provincia->id_provincia }}</td>
                <td scope="row">{{ $provincia->nombre }}</td>
                <td scope="row">{{ $provincia->id_comunidad }}</td>
                <td scope="row">{{ $provincia->getNombreComunidad($provincia->id_comunidad) }}</td>
                <td scope="row"></td>
                <td>
                    <form name="foo" action="{{ route('provincias.destroy', $provincia) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('provincias.show', $provincia) }}" class="btn btn-success">Detalles</a>
                        <a href="{{ route('provincias.edit', $provincia) }}" class="btn btn-warning">Actualizar</a>
                        <input type="submit" value="Borrar   " class="btn btn-danger">
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td>No hay provincias registrados</td>
            </tr>

        @endforelse
        </tbody>
    </table>

    <p></p>

    {{ $provincias->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

