@extends('master')

@section('content')
<div class="container">
  <div class="alert alert-success" role="alert">
    <h5 align="center"> Administracion de academias </h5>
  </div>
<hr>
@include('Academias.modal-agregar')
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
        <td><button type="button" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i> </button></td>
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
