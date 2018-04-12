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
	<title>Libros</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">	
	</head>
	<body>
		<div>
			<h1>Registrar libros</h1>		
		</div>
			<hr>
		<div>
			<form action="alta.php"> 
				<label for="Libro[titulo]">Título: </label>
				<input id="Libro[titulo]" name="Libro[titulo]"></br>
				<label for="Libro[id_autor]">ID Autor:</label>
				<input id="Libro[id_autor]" name="Libro[id_autor]"></br>
				<label for="Libro[anio]">Año publicación:</label>
				<input id="Libro[anio]" name="Libro[anio]"></br>	
				<input type="submit" value="Registrar">			
			</form>	
		</div>
		<footer>
			<a href="creditos.php">Créditos</a>
		</footer>
	</body>
</html>