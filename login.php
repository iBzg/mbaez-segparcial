<?php 
include 'conexion.php';
$conexion = conectar();
session_start();
if (isset($_POST['Usuario[usuario]']) && !empty($_POST['Usuario[usuario]'])) {
	$_SESSION['id_usuario'] = 1;
  echo "Has iniciado sesion.";
  header('Location: menu.php');
} else {
	echo "Datos incorrectos.";
  header('Location: login.php');
}
 ?>	

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">	
	</head>
	<body>
		<div>
			<h1>Login</h1>		
		</div>
			<hr>
		<div id="form">
		<fieldset>
			<legend>Login</legend>
			<form action="menu.php"> 
				<label for="usuario">Usuario: </label>
				<input id="usuario" name="usuario"></br>
				<label for="contrasenia">Contrseña: </label>
				<input type="password" id="contrasenia" name="contrasenia"></br>
				<input id="btn" type="submit" value="Entrar">
			</form>
		</fieldset>	
		</div>
		<footer>
			<a href="creditos.php">Créditos</a>
		</footer>
	</body>
</html>