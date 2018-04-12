<?php 
include 'conexion.php';
$conexion = conectar();

session_start();
if (isset($_POST['Usuario[usuario]']) && !empty($_POST['Usuario[usuario]'])) {
	
} else {
	
  header('Location: login.php');
}
 ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">	
	</head>
	<body>
		<div>
			<h1>Registrar usuarios</h1>		
		</div>
			<hr>
		<div>
			<form action="alta.php"> 
				<label for="Usuario[nombre]">Nombre: </label>
				<input id="Usuario[nombre]" name="Usuario[nombre]"></br>
				<label for="Usuario[apaterno]">Apellido paterno:</label>
				<input id="Usuario[apaterno]" name="Usuario[apaterno]"></br>
				<label for="Usuario[amaterno]">Apellido materno:</label>
				<input id="Usuario[amaterno]" name="Usuario[amaterno]"></br>
				<label for="Usuario[usuario]">Usuario: </label>
				<input id="Usuario[usuario]" name="Usuario[usuario]"></br>
				<label for="Usuario[contrasenia]">Contrseña: </label>
				<input id="Usuario[contrasenia]" name="Usuario[contrasenia]"></br>
				<input type="submit" value="Registrar">				
			</form>	
		</div>
		<footer>
			<a href="creditos.php">Créditos</a>
		</footer>
	</body>
</html>