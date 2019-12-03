@extends('plantillas.plantilla')

@section('contenido')
    <!-- Titulo de la página -->
    <h1>{{ $title = 'Editar Toponimo' }}</h1>

    <!-- Formulario -->
    <form name="crear" method="POST" action="{{ route('toponimos.update', $toponimo->id) }}"
          enctype="application/x-www-form-urlencoded">
        <!-- PROTECCION CSRF -->
        @method('PUT')
        @CSRF
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $toponimo['nombre'] }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">ID Provincia</label>
            <input type="text" name="id_provincia" class="form-control" id="id_provincia"
                   value="{{ $toponimo['id_provincia'] }}">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="enviar" id="enviar" value="Actualizar Toponimo"/>
            <a class="btn btn-warning" href="{{ route('toponimos.index') }}">Volver al listado de Toponimos</a>
        </div>
    </form>

    @extends('plantillas.footer')

@endsection

