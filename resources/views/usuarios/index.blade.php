@extends('plantillas.plantilla')

@section('contenido')
    <!-- INDEX.BLADE.PHP -->
    <!-- section CONTENIDO -->

    <!-- Titulo de la página -->
    <h1>{{ $title }}</h1>
    <p><a class="btn btn-primary" href="{{ route('usuarios.create') }}">Crear Usuario</a></p>

    <!-- Tabla -->
    <table class="table table-hover mt-3">
        <!-- Cabecera -->
        <thead>
        <tr>
            <th scope="col">ID Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">email</th>
            <th scope="col">Contraseña <strong>(encriptada)</strong></th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
        @forelse($usuarios as $usuario)
            <tr>
                <td scope="row">{{ $usuario->id }}</td>
                <td scope="row">{{ $usuario->nombre }}</td>
                <td scope="row">{{ $usuario->email }}</td>
                <td scope="row">{{ $usuario->contraseña }}</td>
                <td>
                    <form name="foo" action="{{ route('usuarios.destroy', $usuario) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('usuarios.show', $usuario) }}" class="btn btn-success">Detalles</a>
                        <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-warning">Actualizar</a>
                        <input type="submit" value="Borrar" class="btn btn-danger">
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td>No hay Usuarios registrados</td>
            </tr>

        @endforelse
        </tbody>
    </table>

    <p></p>

    {{ $usuarios->links() }} <!-- MUESTRA LOS NUMEROS DE PÁGINA -->

    @extends('plantillas.footer')

@endsection

