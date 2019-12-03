@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->
    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('comunidades.create') }}">Crear Comunidad</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">ID comunidad</th>
            <th scope="col">Nombre de la comunidad</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($comunidades as $comunidad)
            <tr>
                <td scope="row">{{ $comunidad->id }}</td>
                <td scope="row">{{ $comunidad->nombre }}</td>
                <td>
                    <form name="foo" action="{{ route('comunidades.destroy', $comunidad) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('comunidades.show', $comunidad) }}" class="btn btn-success">Detalles&nbsp;&nbsp;</a>
                        <a href="{{ route('comunidades.edit', $comunidad) }}" class="btn btn-warning">Actualizar</a>
                        <input type="submit" value="Borrar   " class="btn btn-danger">
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td>No hay comunidades registradas</td>
            </tr>

        @endforelse
        </tbody>
    </table>

    <p></p>

    {{ $comunidades->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

