@extends('plantillas.plantilla')

@extends('plantillas.barras')

@section('contenido')

      <h1>Error 404:</h1>
      <h1>{{ $title = 'Pagina no encontrada' }}</h1>
      <a href="{{ URL::previous() }}" class="btn btn-warning">Volver</a>
    </div>
  </main>

@extends('plantillas.footer')

@endsection

