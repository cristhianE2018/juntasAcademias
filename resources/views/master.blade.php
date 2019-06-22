<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Proyecto
    </title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('data-tables/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.css') }}">
</head>
    <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12"><center><img src="../img/tec_cos.jpg"></center></div>
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
                                <li><a href="{{ route("verDocentes") }}">ver docentes<i ></i></a></li>
                                <li><a href="{{ route("verAcademias") }}">ver academias<i ></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

        <div class='container'>
            @yield('content')
        </div>

        <br>
            <footer>
                <p class="copyright">Instituto Tecnologico Superior de Cosamaloapan</p>
            </footer>
            <script src="{{ asset('data-tables/datatables.min.js') }}"></script>
    </body>
</html>
@section('codejs')