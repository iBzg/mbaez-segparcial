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
	<title>Menú</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">	
	</head>
	<body>
		<div>
			<h1>Menú</h1>	
			<hr>	
		</div>
		<div id="menu">
		<fieldset>
			<legend>Opciones</legend>
			<a href="alta_libro.php ">Libros</a>
			<br>
			<a href="alta_usuario.php">Usuarios</a>
			<br>
			<a href="alta_autor.php">Autores</a>
			<br>
		</fieldset>
		</div>
		<footer>
			<a href="creditos.php">Créditos</a>
		</footer>
	
	
	</body>
</html>