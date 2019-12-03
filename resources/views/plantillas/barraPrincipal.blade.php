@section('barraPrincipal')
<!-- BARRAS.BLADE.PHP -->
<!-- section('barraPrincipal') -->
<!-- empieza barraPrincipal -->

<div class="container-fluid"><!-- CONTAINER FLUIDO BARRA PRINCIPAL -->
    <!--BARRA PRINCIPAL -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('inicio' )}}">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('inicio' )}}">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('inicio' )}}">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('inicio' )}}">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('login' )}}">Login<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <!--FIN BARRA PRINCIPAL -->
</div><!-- FIN CONTAINER FLUIDO BARRA PRINCIPAL -->

<!-- ENDsection('barraPrincipal') -->
@endsection

