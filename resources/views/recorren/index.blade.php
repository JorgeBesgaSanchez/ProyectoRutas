@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->
    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('recorren.create') }}">Crear Recorren</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">ID ruta</th>
            <th scope="col">Nombre ruta</th>
            <th scope="col">ID camino</th>
            <th scope="col">Nombre camino</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($recorren as $recorre)
            <tr>
                <td scope="row">{{ $recorre->id_ruta }}</td>
                <td scope="row">{{ $recorre->getNombreRuta($recorre->id_ruta) }}</td>
                <td scope="row">{{ $recorre->id_camino }}</td>
                <td scope="row">{{ $recorre->getNombreCamino($recorre->id_camino) }}</td>
                <td scope="row"></td>
                <td>
                    <form name="foo" action="{{ route('recorren.destroy', $recorre) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('recorren.show', $recorre) }}" class="btn btn-success">Detalles</a>
                        <a href="{{ route('recorren.edit', $recorre) }}" class="btn btn-warning">Actualizar</a>
                        <input type="submit" value="Borrar   " class="btn btn-danger">
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td>No hay recorren registrados</td>
            </tr>

        @endforelse
        </tbody>
    </table>

    <p></p>

    {{ $recorren->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

