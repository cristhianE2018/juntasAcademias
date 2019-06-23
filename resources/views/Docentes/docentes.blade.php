@extends('master')
@section('content')
<div class="container">
  <div class="alert alert-success" role="alert">
    <h5 align="center"> Administracion de docentes </h5>
    </div>
<hr>

@include('Docentes.modal-agregar')
@include('Docentes.modal-actualizar')


<a href="#modalagregar" data-toggle="modal"class="btn btn-info"><i class="far fa-adress-card"></i>Agregar Docente</a>


<table class="table table-hover" id="tablaAcademias">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Puesto</th>
        <th>Contraseña</th>
        <th>Academia</th>
        <th>Actualizar</th>
        <th>Eliminar</th>
      </tr>
      </tr>
    </thead>
    <tbody>
    @foreach ($query as $que)
          <tr>
        <td class="h6"><i class="fas fa-key"></i> {{ $que->Clave }}</td>
        <td class="h6">{{ $que->Nombre }}</td>
        <td class="h6">{{ $que->Apellidos }}</td> 
        <td class="h6">{{ $que->Puesto }}</td> 
        <td class="h6">{{ $que->Contraseña }}</td> 
        <td class="h6">{{ $que->academia }}</td>  
        <td> <a href="#modalactualizar" data-toggle="modal" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i> </a></td>
        <td> <a href="{{ route("delDocente",$que->id) }}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a> </td>
      </tr>
    @endforeach 
      
    </tbody>
  </table>
</div>
@endsection
@section('codigoJs')
<script>
    $('#tablaAcademias').DataTable();
</script>
@endsection()