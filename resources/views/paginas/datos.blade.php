@extends('plantillas.plantilla')

@section('contenido')

<!---------- CONTENIDO ---------->

<main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
          <div class="container">
            <h1 class="display-3">¡Te interesa saber!</h1>
            <p>TSuspendisse in diam dignissim, consequat ligula ac, semper dui. Aliquam varius massa in imperdiet aliquet.
                    Sed vulputate neque et metus cursus condimentum. Duis accumsan dictum est, eu ultrices erat semper et. Cras
                    vel ullamcorper nunc. Sed porttitor lorem a tortor placerat, ut consectetur eros accumsan. Donec vulputate
                    at tellus sit amet pretium. Etiam eu lacinia nibh.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">¡Aprende más! &raquo;</a></p>
          </div>
        </div>
      
        <div class="container">
          <!-- Example row of columns -->
          <div class="row">
            <div class="col-md-4">
              <h2>Orígenes del senderismo</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">Leer &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Tipos de senderos señalizados</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">Leer &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Naturaleza y fauna</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-secondary" href="#" role="button">Leer &raquo;</a></p>
            </div>
          </div>
      
          <hr>
      
        </div> <!-- /container -->
      
      </main>

@extends('plantillas.footer')

@endsection