@extends('plantillas.plantilla')

@section('contenido')
    <!-- Titulo de la página -->
    <h1>{{ $title = 'Editar Pasan' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('pasan.update', $pasan->id) }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @method('PUT')
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo ID de ruta:</label>
            <input type="text" name="id_ruta" class="form-control" id="id_ruta" value="{{ $pasan['id_ruta'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nuevo ID de toponimo:</label>
            <input type="text" name="id_toponimo" class="form-control" id="id_toponimo"
                   value="{{ $pasan['id_toponimo'] }}">
        </div>
        <div class="form-group">
            <input type="submit" name="enviar" id="enviar" value="Actualizar pasan" class="btn btn-success"/>
            <a href="{{ route('pasan.index' )}}" class="btn btn-warning">Volver</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection
