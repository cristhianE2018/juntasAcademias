<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('data-tables/datatables.min.css') }}">
</head>
<body>
	<br>
	<hr>
	<div class="container">
	<div class="login-box">
		<h1> Inicio de Sesion </h1>
		<form method="GET" action="{{ route('entrar') }}">
			<label for="Usuario">Usuario</label>
			<input type="text" placeholder="Ingresar Usuario" name="txtusuario">
	
			<label for="Contraseña">Contraseña</label>
			<input type="password" placeholder="Ingresar Contraseña" name="txtcontraseña">
	
			<input type="submit" value="Loguear">
			<a href="#">Olvido su contraseña?</a>
			<br>
			<a href="#">Usted no tiene cuenta?</a>
		</form>
	</div>
	</div>
</body>
</html>