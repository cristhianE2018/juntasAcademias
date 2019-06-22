@extends('master')
@section('content')

<td><button type="button" class="btn btn-primary">Agregar</button></td>
<table class="table table-striped thead-dark" id="tabla">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Puesto</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Academia</th>
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
        <td>{{ $que->Apellidos }}</td> 
        <td>{{ $que->Puesto }}</td> 
        <td>{{ $que->Contraseña }}</td> 
        <td>{{ $que->academia }}</td>  
        <td><button type="button" class="btn btn-primary">Actualizar</button></td>
        <td> <a href="{{ route("delDocente",$que->id) }}" class="btn btn-danger"> Eliminar </a></td>
      </tr>
    @endforeach 
      
    </tbody>
  </table>
@endsection
@section('codejs')
<script>
  $(document).ready( function () {
    $('#tabla').DataTable();
} );
</script>
@endsection()