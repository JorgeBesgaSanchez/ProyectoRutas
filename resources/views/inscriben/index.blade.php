@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->
    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('inscriben.create') }}">Crear Inscripción</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">ID de actividad</th>
            <th scope="col">Nombre actividad</th>
            <th scope="col">ID de usuario</th>
            <th scope="col">Nombre usuario</th>
            <th scope="col">Fecha y hora</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($inscriben as $inscribe)
            <tr>
                <td scope="row">{{ $inscribe->id_actividad }}</td>
                <td scope="row">{{ $inscribe->getNombreActividad($inscribe->id_actividad) }}</td>
                <td scope="row">{{ $inscribe->id_usuario }}</td>
                <td scope="row">{{ $inscribe->getNombreUsuario($inscribe->id_usuario) }}</td>
                <td scope="row">{{ $inscribe->fecha_y_hora }}</td>
                <td>
                    <form name="foo" action="{{ route('inscriben.destroy', $inscribe) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('inscriben.show', $inscribe) }}"
                           class="btn btn-success">Detalles&nbsp;&nbsp;</a>
                        <a href="{{ route('inscriben.edit', $inscribe) }}" class="btn btn-warning">Actualizar</a>
                        <input type="submit" value="Borrar   " class="btn btn-danger">
                    </form>
                </td>
            </tr>

        @empty

            <tr>
                <td>No hay inscripciones registradas</td>
            </tr>

        @endforelse
        </tbody>
    </table>

    <p></p>

    {{ $inscriben->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

