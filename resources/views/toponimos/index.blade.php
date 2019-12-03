@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->
    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('toponimos.create') }}">Crear Tipo marcha</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">ID Toponimo</th>
            <th scope="col">Nombre</th>
            <th scope="col">ID Provincia</th>
            <th scope="col">Nombre Provincia</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($toponimos as $toponimo)

            <tr>
                <td scope="row">{{ $toponimo->id }}</td>
                <td scope="row">{{ $toponimo->nombre }}</td>
                <td scope="row">{{ $toponimo->id_provincia }}</td>
                <td scope="row">{{ $toponimo->getNombreProvincia($toponimo->id_provincia) }}</td>
                <td>
                    <form name="foo" action="{{ route('toponimos.destroy', $toponimo) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('toponimos.show', $toponimo) }}" class="btn btn-success">Detalles</a>
                        <a href="{{ route('toponimos.edit', $toponimo) }}" class="btn btn-warning">Actualizar</a>
                        <input type="submit" value="Borrar" class="btn btn-danger">
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td>No hay Toponimos registrados</td>
            </tr>

        @endforelse
        </tbody>
    </table>

    <p></p>

    {{ $toponimos->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

