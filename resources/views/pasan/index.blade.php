@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->
    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('pasan.create') }}">Crear Pasan</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">ID de ruta</th>
            <th scope="col">Nombre ruta</th>
            <th scope="col">ID de toponimo</th>
            <th scope="col">Nombre toponimo</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($pasan as $pasa)
            <tr>
                <td scope="row">{{ $pasa->id_ruta }}</td>
                <td scope="row">{{ $pasa->getNombreRuta($pasa->id_ruta) }}</td>
                <td scope="row">{{ $pasa->id_toponimo }}</td>
                <td scope="row">{{ $pasa->getNombreToponimo($pasa->id_toponimo) }}</td>
                <td>
                    <form name="foo" action="{{ route('pasan.destroy', $pasa) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('pasan.show', $pasa) }}" class="btn btn-success">Detalles&nbsp;&nbsp;</a>
                        <a href="{{ route('pasan.edit', $pasa) }}" class="btn btn-warning">Actualizar</a>
                        <input type="submit" value="Borrar   " class="btn btn-danger">
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td>No hay pasan registradas</td>
            </tr>

        @endforelse
        </tbody>
    </table>

    <p></p>

    {{ $pasan->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

