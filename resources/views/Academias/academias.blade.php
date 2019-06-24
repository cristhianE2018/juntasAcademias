@extends('master')

@section('content')
<div class="container">
  <div class="alert" role="alert">
    <h5 align="center"> Administracion de academias </h5>
  </div>
  <!-- VALIDACION SI EL REGISTRO SE AÑADE O NO -->
  @if(isset($_GET['mensaje']))
  @if($_GET['mensaje']=="Exito")
  <div class="alert alert-success" role="alert">
    <h5 align="center"> <i class="far fa-check-square"></i> El registro se añadio exitosamente! :) </h5>
  </div>
  @endif
  @if($_GET['mensaje']=="Exito2")
  <div class="alert alert-success" role="alert">
    <h5 align="center"> <i class="far fa-check-square"></i> Eliminado Exitosamente! :) </h5>
  </div>
  @endif
  @if($_GET['mensaje']=="Error1")
  <div class="alert alert-danger" role="alert">
    <h5 align="center"> <i class="fas fa-times"></i> Error al agregar: No deben ir campos vacios :/ </h5>
  </div>
  @endif
  @if($_GET['mensaje']=="Error2")
  <div class="alert alert-danger" role="alert">
    <h5 align="center"> <i class="fas fa-times"></i> Error al eliminar: No se puede eliminar esta carrera ya que hay
      docentes que pertenecen a ella, informar al DBA para eliminacion en cascada :/ </h5>
  </div>
  @endif
  @endif

<hr>
@include('Academias.modal-agregar')
@include('Academias.modal-actualizar')
<a href="#modalagregar" data-toggle="modal" class="btn btn_add"> <i class="far fa-address-card"></i> Agregar academia </a>
<table class="table table-hover" id="tablaAcademias">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Numero de Docentes</th>
        <th>Actualizar</th>
        <th>Eliminar</th>
      </tr>
      </tr>
    </thead>
    <tbody>
        @foreach ($query as $que)
        <tr>
        <td class="h6"> <i class="fas fa-key"></i> {{ $que->id }}</td>
        <td class="h6">{{ $que->Nombre }}</td>
        <td class="h6">{{ $que->Numero_docentes }}</td> 
        <td> <a href="#modalactualizar" data-toggle="modal" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i> </a></td>
        <td> <a href="{{ route("delAcademia",$que->id) }}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a></td>
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
@endsection
