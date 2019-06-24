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
                        <a class="nav-item nav-link" href="{{ route('log') }}"> Salir </a>
                      </div>
                    </div>
            </nav>
        </header>
        <a href="#modaladd" data-toggle="modal" class="btn btn-info"><i class="far fa-adress-card"></i>Agregar Junta</a>
        <div class="container">
        <div class="alert" role="alert">
          <h5 align="center"> Vizualización de Juntas {{ $academia }}</h5>
        </div>
    </div>
    <table class="table table-hover" id="tablaAcademias">
            <thead class="thead-dark">
              <tr>
                <th>Id</th>
                <th>Nivel importancia</th>
                <th>Motivos</th>
                <th>Lugar</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Academia</th>
                <th> Eliminar </th>
              </tr>
              </tr>
            </thead>
            <tbody>
            @foreach ($juntas as $jun)
                  <tr>
                <td class="h6"><i class="fas fa-key"></i> {{ $jun->id }}</td>
                <td class="h6">{{ $jun->Nivel_de_Importancia }}</td>
                <td class="h6">{{ $jun->Motivos }}</td> 
                <td class="h6">{{ $jun->Lugar }}</td> 
                <td class="h6">{{ $jun->Fecha }}</td> 
                <td class="h6">{{ $jun->Hora }}</td> 
                <td class="h6"> {{ $jun->academia }}</td> 
                    <td> <a href="{{ route('delJunta',$jun->id) }}"> <i class="fas fa-trash-alt"></i></a></td>
              </tr>
            @endforeach 
              
            </tbody>
    </table>
    
        </div>
        @include('Juntas.modal-agregar') 
        <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('data-tables/datatables.min.js') }}"></script>
    </body>
    </html>