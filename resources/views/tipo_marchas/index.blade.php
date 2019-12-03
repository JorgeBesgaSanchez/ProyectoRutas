@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->
    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('tipo_marchas.create') }}">Crear Tipo marcha</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">ID Tipo marcha</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($marchas as $marcha)
            <tr>
                <td scope="row">{{ $marcha->id }}</td>
                <td scope="row">{{ $marcha->nombre }}</td>
                <td>
                    <form name="foo" action="{{ route('tipo_marchas.destroy', $marcha) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('tipo_marchas.show', $marcha) }}" class="btn btn-success">Detalles</a>
                        <a href="{{ route('tipo_marchas.edit', $marcha) }}" class="btn btn-warning">Actualizar</a>
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

    {{ $marchas->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

