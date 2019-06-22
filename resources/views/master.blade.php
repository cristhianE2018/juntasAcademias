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
        <div class="row d-flex">
            <div class="col-md-12">
               <center> <img src="../img/tec_cos.jpg"> </center>
            </div>
        </div>
    
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="#">ITSCO</a></p>
            </div>

            <div class="derecha">
                <nav class="menu">
                    <ul>
                        <li>
                            <a href="#">Inicio<i class=""></i></a>
                        </li>
                        <li><a href="{{ route("verDocentes") }}">Docentes<i ></i></a></li>
                        <li><a href="{{ route("verAcademias") }}">Academias<i ></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    </div>
    @yield('content')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('data-tables/datatables.min.js') }}"></script>
</body>
</html>
@yield('codigoJs')