@extends('master')

@section('titulo', 'Juntas de la academia')

@section('content')
<h4> Docentes </h4>
<hr>
<td><button type="button" class="btn btn-success"><i class="far fa-address-card"></i> Agregar</button></td>
<table class="table table-striped thead-dark" id="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Numero de Docentes</th>
        <th scope="col">Actualizar</th>
        <th scope="col">Eliminar</th>
      </tr>
      </tr>
    </thead>
    <tbody>
        @foreach ($query as $que)
        <tr>
        <td>{{ $que->id }}</td>
        <td>{{ $que->Nombre }}</td>
        <td>{{ $que->Numero_docentes }}</td> 
        <td><button type="button" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i> </button></td>
        <td> <a href="{{ route("delAcademia",$que->id) }}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection

@section('codigojs')
<script>
  $('#table').DataTable();
</script>
@endsection
