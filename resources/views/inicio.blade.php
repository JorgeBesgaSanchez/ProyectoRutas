@extends('plantillas.plantilla')

@section('titulo')

<h1>@Página Inicio</h1>

@endsection


@section('contenido')

<!---------- CONTENIDO ---------->
<div class="container">
    <main role="main" class="inner cover">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('img/fotos/alcazaba.jpeg') }}" class="d-block" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('img/fotos/desierto.jpeg') }}" class="d-block" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('img/fotos/rambla.jpeg') }}" class="d-block" alt="...">
                     </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

        <h1 class="cover-heading">Página Inicio.</h1>
        <p class="lead">
            Suspendisse in diam dignissim, consequat ligula ac, semper dui. Aliquam varius massa in imperdiet aliquet.
            Sed vulputate neque et metus cursus condimentum. Duis accumsan dictum est, eu ultrices erat semper et. Cras
            vel ullamcorper nunc. Sed porttitor lorem a tortor placerat, ut consectetur eros accumsan. Donec vulputate
            at tellus sit amet pretium. Etiam eu lacinia nibh. Class aptent taciti sociosqu ad litora torquent per
            conubia nostra, per inceptos himenaeos. Vivamus nec justo sodales, tempus arcu id, aliquam mi. Proin
            volutpat arcu sed dui posuere ornare. Nullam vel orci quis justo convallis ullamcorper. In mattis massa nec
            interdum congue. Vivamus iaculis lorem at interdum euismod. Duis vitae nunc quis turpis laoreet fringilla.
            Morbi ut justo ac nunc pulvinar hendrerit in at justo. </p>
        <p class="lead">
            <a href="#" class="btn btn-lg btn-secondary">¡Explora!</a>
        </p>
    </main>
</div>

@extends('plantillas.footer')

@endsection
