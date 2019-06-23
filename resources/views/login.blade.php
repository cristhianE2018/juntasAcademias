@extends('master')

@section('titulo', 'Login')

@section('content')
<div class="login-box">
		<img class="avatar" src="img/logosistemas.jpg" alt="prueba">
		<h1>Ingeniería en Sistemas Computacionales</h1>
		<form>
			<label for="Usuario">Usuario</label>
			<input type="text" placeholder="Ingresar Usuario">

			<label for="Contraseña">Contraseña</label>
			<input type="password" placeholder="Ingresar Contraseña">

			<input type="submit" value="Loguear">
			<a href="#">Olvido su contraseña?</a>
			<br>
			<a href="#">Usted no tiene cuenta?</a>
		</form>
	</div>
@stop