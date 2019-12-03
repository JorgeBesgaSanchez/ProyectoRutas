@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->
    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('rutas.create') }}">Crear Ruta</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Desnivel</th>
            <th scope="col">Sugerencias</th>
            <th scope="col">Cartografia</th>
            <th scope="col">ID Camino</th>
            <th scope="col">Tipo Camino</th>
            <th scope="col">ID Dificultad</th>
            <th scope="col">Dificultad</th>
            <th scope="col">ID Zona</th>
            <th scope="col">Zona</th>
            <th scope="col">ID Actividad</th>
            <th scope="col">Actividad</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($rutas as $ruta)
            <tr>
                <td scope="row">{{ $ruta->nombre }}</td>
                <td scope="row">{{ $ruta->desnivel }}</td>
                <td scope="row">{{ $ruta->sugerencias }}</td>
                <td scope="row">{{ $ruta->cartografia }}</td>
                <td scope="row">{{ $ruta->id_camino }}</td>
                <td scope="row">{{ $ruta->getNombreCamino($ruta->id_camino) }}</td>
                <td scope="row">{{ $ruta->id_dificultad }}</td>
                <td scope="row">{{ $ruta->getNombreDificultad($ruta->id_dificultad)}} </td>
                <td scope="row">{{ $ruta->id_zona }}</td>
                <td scope="row">{{ $ruta->getNombreZona($ruta->id_zona) }}</td>
                <td scope="row">{{ $ruta->id_actividad }}</td>
                <td scope="row">{{ $ruta->getNombreActividad($ruta->id_actividad) }}</td>
                <td>
                    <form name="foo" action="{{ route('rutas.destroy', $ruta) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('rutas.show', $ruta) }}" class="btn btn-success">Detalles</a>
                        <a href="{{ route('rutas.edit', $ruta) }}" class="btn btn-warning">Actualizar</a>
                        <input type="submit" value="Borrar   " class="btn btn-danger">
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td>No hay rutas registradas</td>
            </tr>

        @endforelse
        </tbody>
    </table>

    <p></p>

    {{ $rutas->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

