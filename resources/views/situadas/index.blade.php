@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->
    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('situadas.create') }}">Crear Situadas</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">ID Provincia</th>
            <th scope="col">Provincia</th>
            <th scope="col">ID Zona</th>
            <th scope="col">Zona</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($situadas as $situada)
            <tr>
                <td scope="row">{{ $situada->id_provincia }}</td>
                <td scope="row">{{ $situada->getNombreProvincia($situada->id_provincia) }}</td>
                <td scope="row">{{ $situada->id_zona }}</td>
                <td scope="row">{{ $situada->getNombreZona($situada->id_zona) }}</td>
                <td>
                    <form name="foo" action="{{ route('situadas.destroy', $situada) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('situadas.show', $situada) }}" class="btn btn-success">Detalles</a>
                        <a href="{{ route('situadas.edit', $situada) }}" class="btn btn-warning">Actualizar</a>
                        <input type="submit" value="Borrar" class="btn btn-danger">
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td>No hay situadas registradas</td>
            </tr>

        @endforelse
        </tbody>
    </table>

    <p></p>

    {{ $situadas->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

