@extends('master')
@section('content')
<div class="container">
  <div class="alert alert-success" role="alert">
    <h5 align="center"> Administracion de docentes </h5>
    </div>
<hr>
<td><button type="button" class="btn btn-info"><i class="far fa-address-card"></i> Agregar docente </button></td>
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
        <td class="h6">{{ $que->Clave }}</td>
        <td class="h6">{{ $que->Nombre }}</td>
        <td class="h6">{{ $que->Apellidos }}</td> 
        <td class="h6">{{ $que->Puesto }}</td> 
        <td class="h6">{{ $que->Contraseña }}</td> 
        <td class="h6">{{ $que->academia }}</td>  
        <td><button type="button" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i> </button></td>
        <td> <a href="{{ route("delDocente",$que->Clave) }}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a> </td>
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