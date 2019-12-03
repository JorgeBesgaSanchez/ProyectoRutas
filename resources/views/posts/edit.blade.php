@extends('plantillas.plantilla')

@section('contenido')
    <!-- Titulo de la página -->
    <h1>{{ $title = 'Editar Post' }}</h1>

    <!-- Formulario-->

    <form name="crear" method="POST" action="{{ route('posts.update', $post->id) }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @method('PUT')
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo texto del Post:</label>
            <textarea class="form-control" rows="4" name="texto" id="texto"
                      placeholder="">{{ $post['texto'] }}</textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo ID de usuario:</label>
            <input type="text" name="id_usuario" class="form-control" id="id_usuario" value="{{ $post['id_usuario'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo ID de ruta:</label>
            <input type="text" name="id_ruta" class="form-control" id="id_ruta" value="{{ $post['id_ruta'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nueva fecha: <strong>(AA-MM-DD hh:mm:ss)</strong></label>
            <input type="datetime-local" name="fecha_y_hora" class="form-control" id="fecha_y_hora"
                   value="{{ $post['fecha_y_hora'] }}">
        </div>
        <div class="form-group">
            <input type="submit" name="enviar" id="enviar" value="Actualizar post" class="btn btn-success"/>
            <a href="{{ route('posts.index' )}}" class="btn btn-warning">Volver</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection
