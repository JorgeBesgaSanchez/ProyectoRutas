@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->

    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('zonas.create') }}">Crear Zona</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">ID Zona</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($zonas as $zona)
            <tr>
                <td scope="row">{{ $zona->id }}</td>
                <td scope="row">{{ $zona->nombre }}</td>
                <td>
                    <form name="foo" action="{{ route('zonas.destroy', $zona) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('zonas.show', $zona) }}" class="btn btn-success">Detalles</a>
                        <a href="{{ route('zonas.edit', $zona) }}" class="btn btn-warning">Actualizar</a>
                        <input type="submit" value="Borrar" class="btn btn-danger">
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td>No hay Zonas registrados</td>
            </tr>

        @endforelse
        </tbody>
    </table>

    <p></p>

    {{ $zonas->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

