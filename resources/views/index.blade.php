@extends('layouts.master')

@section('titulo', 'Inicio')

@section('content')
<center><h4 class="bg-info">--->Academias<---</h4></center>

<div class="container">
<div class="row">
<div class="col-md-4">
	<div class="card" style="width: 20rem;">
		<img class="card-img-top img-fluid" src="img/sistemas.jpg" alt="card img cap">
		<div class="card-block">
			<h4 class="card-tittle"><center>Ing en Sistemas</center></h4>
			<a href ="usuarios.html"><button id="prueba" class="btn btn-secondary btn-block">Ingresar</button></a>
		</div>
		</div>
	</div>

<div class="col-md-4">
	<div class="card" style="width: 20rem;">
		<img class="card-img-top img-fluid" src="img/petrolera.jpg" alt="card img cap">
		<div class="card-block">
			<h4 class="card-tittle"><center>Ing Petrolera</center></h4>
			<a href ="usuariospetrolera.html"><button id="prueba1" class="btn btn-secondary btn-block">Ingresar</button></a>
		</div>
		</div>
	</div>

	<div class="col-md-4">
	<div class="card" style="width: 20rem;">
		<img class="card-img-top img-fluid" src="img/Industrial.jpg" alt="card img cap">
		<div class="card-block">
			<h4 class="card-tittle"><center>Ing Industrial</center></h4>
			<a href ="usuariosindustrial.html"><button id="prueba2" class="btn btn-secondary btn-block">Ingresar</button></a>
		</div>
		</div>
	</div>


</div>
</div>

<br>

<div class="container">
<div class="row">
<div class="col-md-4">
	<div class="card" style="width: 20rem;">
		<img class="card-img-top img-fluid" src="img/electronica.jpg" alt="card img cap">
		<div class="card-block">
			<h4 class="card-tittle"><center>Ing Electrónica</center></h4>
			<button class="btn btn-secondary btn-block">Ingresar</button>
		</div>
		</div>
	</div>

<div class="col-md-4">
	<div class="card" style="width: 20rem;">
		<img class="card-img-top img-fluid" src="img/gestion.jpg" alt="card img cap">
		<div class="card-block">
			<h4 class="card-tittle"><center>Ing en Gestión</center></h4>
			<button class="btn btn-secondary btn-block">Ingresar</button>
		</div>
		</div>
	</div>

	<div class="col-md-4">
	<div class="card" style="width: 20rem;">
		<img class="card-img-top img-fluid" src="img/informatica.jpg" alt="card img cap">
		<div class="card-block">
			<h4 class="card-tittle"><center>Ing Informática </center></h4>
			<button class="btn btn-secondary btn-block">Ingresar</button>
		</div>
		</div>
	</div>


</div>
</div>

<br>

<div class="container">
<div class="row">
<div class="col-md-4">
	<div class="card" style="width: 20rem;">
		<img class="card-img-top img-fluid" src="img/tecnologias.jpg" alt="card img cap">
		<div class="card-block">
			<h4 class="card-tittle"><center>Ing en Tecnologías</center></h4>
			<button class="btn btn-secondary btn-block">Ingresar</button>
		</div>
		</div>
	</div>

	<div class="col-md-4">
	<div class="card" style="width: 20rem;">
		<img class="card-img-top img-fluid" src="img/energias.jpg" width="200" height="200" >
		<div class="card-block">
			<h4 class="card-tittle"><center>Ing en Energías </center></h4>
			<button class="btn btn-secondary btn-block">Ingresar</button>
		</div>
		</div>
	</div>

<div class="col-md-4">
	<div class="card" style="width: 20rem;">
		<img class="card-img-top img-fluid" src="img/innovacion.jpg" alt="card img cap">
		<div class="card-block">
			<h4 class="card-tittle"><center>Ing en Innovación</center></h4>
			<button class="btn btn-secondary btn-block">Ingresar</button>
		</div>
		</div>
	</div>


</div>
</div>
@stop