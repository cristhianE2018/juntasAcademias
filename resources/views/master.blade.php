<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Juntas de Academia </title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('data-tables/datatables.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="../img/tec_cos.jpg">
            </div>
        </div>
    
    <header>
            <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#"> Juntas de academias </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="{{ route('verAcademias') }}"> Academias <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="{{ route('verDocentes') }}"> Docentes </a>
                        <a class="nav-item nav-link" href="#"> Salir </a>
                      </div>
                    </div>
                  </nav>
    </header>
    </div>

    @yield('content')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('data-tables/datatables.min.js') }}"></script>
</body>
</html>
@yield('codigoJs')