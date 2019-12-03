@extends('plantillas.plantilla')

@section('contenido')
<!-- INDEX.BLADE.PHP -->
<!-- section CONTENIDO -->

<!-- Titulo de la página -->
<h1>{{ $title }}</h1>
<p><a class="btn btn-primary" href="{{ route('actividades.create') }}">Crear actividad</a></p>

<!-- Tabla -->
<table class="table table-hover mt-3">
    <!-- Cabecera -->
    <thead>
    <tr>
        <th scope="col">ID actividad</th>
        <th scope="col">Nombre de la actividad</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <!-- Cuerpo -->
    <tbody>
    @forelse($actividades as $actividad)
    <tr>
        <td scope="row">{{ $actividad->id }}</td>
        <td scope="row">{{ $actividad->nombre }}</td>
        <td>
            <form name="foo" action="{{ route('actividades.destroy', $actividad) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route('actividades.show', $actividad) }}" class="btn btn-success">Detalles&nbsp;&nbsp;</a>
                <a href="{{ route('actividades.edit', $actividad) }}"
                   class="btn btn-warning">Actualizar</a>
                <input type="submit" value="Borrar    " class="btn btn-danger">
            </form>
        </td>
    </tr>

    @empty
    <tr>
        <td>No hay actividades registradas</td>
    </tr>

    @endforelse
    </tbody>
</table>

<p></p>
{{ $actividades->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

<!-- extends ('palntillas.footer.php') -->
@extends('plantillas.footer')

<!-- INDEX.BLADE.PHP -->
@endsection

