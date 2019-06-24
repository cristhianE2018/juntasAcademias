<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Juntas </title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('data-tables/datatables.min.css') }}">
</head>
<body>
    <div class="container"> 
        <h5> Usuario: {{ $usuario }}</h5>
        <h5> Puesto : {{ $puesto }}</h5>
        <h1 align="center"> Juntas de la academia de {{ $academia }}</h1>
        <a href="{{ route('log') }}" class="btn btn-danger"> Cerrar </a>
        <br>
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
                      </tr>
                    @endforeach 
                      
                    </tbody>
                  </table>
    </div>

</body>
</html>