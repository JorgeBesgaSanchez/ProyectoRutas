@extends('plantillas.plantilla')

@section('contenido')

    <h1>{{ $title = 'Crear Post nuevo' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('posts.store') }}" enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Texto del Post</label><br/>
            <textarea class="form-control" rows="4" name="texto" id="texto" placeholder=""></textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID usuario</label>
            <input type="text" name="id_usuario" class="form-control" id="id_usuario" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID ruta</label>
            <input type="text" name="id_ruta" class="form-control" id="id_ruta" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Fecha y hora <strong>(AA-MM-DD hh:mm:ss)</strong></label>
            <input type="datetime-local" name="fecha_y_hora" class="form-control" id="fecha_y_hora" placeholder="">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="crear" id="crear" value="Crear"/>
            <a class="btn btn-warning" href="{{ route('posts.index') }}">Volver al listado de Posts</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

