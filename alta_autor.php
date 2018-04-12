<?php 
include 'conexion.php';
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
	<title>Autores</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">	
	</head>
	<body>
		<div>
			<h1>Registrar autores</h1>		
		</div>
			<hr>
		<div>
			<form action="alta.php"> 
				<label for="Autor[nombre]">Nombre: </label>
				<input id="Autor[nombre]" name="Autor[nombre]"></br>
				<label for="Autor[apaterno]">Apellido paterno:</label>
				<input id="Autor[apaterno]" name="Autor[apaterno]"></br>
				<label for="Autor[amaterno]">Apellido materno:</label>
				<input id="Autor[amaterno]" name="Autor[amaterno]"></br>
				<label for="Autor[nacionalidad]">Nacionalidad: </label>
				<input id="Autor[nacionalidad]" name="Autor[nacionalidad]"></br>
				<input type="submit" value="Registrar">				
			</form>	
		</div>
		<footer>
			<a href="creditos.php">Créditos</a>
		</footer>
	</body>
</html>