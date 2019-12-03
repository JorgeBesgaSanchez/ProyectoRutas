@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->
    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('dificultades.create') }}">Crear Dificultad</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">ID dificultad</th>
            <th scope="col">Nombre de la dificultad</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($dificultades as $dificultad)
            <tr>
                <td scope="row">{{ $dificultad->id }}</td>
                <td scope="row">{{ $dificultad->nombre }}</td>
                <td>
                    <form name="foo" action="{{ route('dificultades.destroy', $dificultad) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('dificultades.show', $dificultad) }}" class="btn btn-success">Detalles&nbsp;&nbsp;</a>
                        <a href="{{ route('dificultades.edit', $dificultad) }}" class="btn btn-warning">Actualizar</a>
                        <input type="submit" value="Borrar   " class="btn btn-danger">
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td>No hay dificultades registradas</td>
            </tr>

        @endforelse
        </tbody>
    </table>

    <p></p>

    {{ $dificultades->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

