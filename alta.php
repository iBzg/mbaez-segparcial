<?php 
include 'conexion.php';
$conexion = conectar();

session_start();
if (isset($_POST['Usuario[usuario]']) && !empty($_POST['Usuario[usuario]'])) {
	
} else {
	
  header('Location: login.php');
}

if (isset($_POST['Usuario[nombre]']) && !empty($_POST['Usuario[nombre]'])) {
	$usuNombre = !empty($_POST['Usuario[nombre]']) ? $_POST['Usuario[nombre]'] : '';
	$usuAPaterno = !empty($_POST['Usuario[apaterno]']) ? $_POST['Usuario[apaterno]'] : '';
	$usuAMaterno = !empty($_POST['Usuario[amaterno]']) ? $_POST['Usuario[amaterno]'] : '';
	$usuUsuario = !empty($_POST['Usuario[usuario]']) ? $_POST['Usuario[usuario]'] : '';
	$usuContr = !empty($_POST['Usuario[contrasenia]']) ? $_POST['Usuario[contrasenia]'] : '';

	$sql = "INSERT INTO usuarios(nombre, apaterno, amaterno, usuario, contrasenia) VALUES ('$usuNombre', '$usuAPaterno', '$usuAMaterno', '$usuUsuario', '$usuContr');";

    $usu = queryPSQL($sql);
	if ($usu) {
    	echo 'Usuario guardado correctamente';
    	header('Location: menu.php');
	} else {
    	echo 'Error al guardar el usuario';
    	header('Location: alta_usuario.php');
	}

} else if (isset($_POST['Libro[titulo]']) && !empty($_POST['Libro[titulo]'])) {
	$libTitulo = !empty($_POST['Libro[titulo]']) ? $_POST['Libro[titulo]'] : '';
	$libAutor = !empty($_POST['Libro[id_autor]']) ? $_POST['Libro[id_autor]'] : '';
	$libAnio = !empty($_POST['Libro[anio]']) ? $_POST['Libro[anio]'] : '';

	$sql = "INSERT INTO libros(titulo,id_autor, anio_publicacion) VALUES ('$libTitulo', '$libAutor', '$libAnio');";

    $lib = queryPSQL($sql);
	if ($lib) {
    	echo 'Libro guardado correctamente';
    	header('Location: menu.php');
	} else {
    	echo 'Error al guardar el libro';
    	header('Location: alta_libro.php');
	}
} else if (isset($_POST['Autor[nombre]']) && !empty($_POST['Autor[nombre]'])) {
	$autorNombre = !empty($_POST['Autor[nombre]']) ? $_POST['Autor[nombre]'] : '';
	$autorAPaterno = !empty($_POST['Autor[apaterno]']) ? $_POST['Autor[apaterno]'] : '';
	$autorAMaterno = !empty($_POST['Autor[amaterno]']) ? $_POST['Autor[amaterno]'] : '';
	$autorNacionalidad = !empty($_POST['Autor[nacionalidad]']) ? $_POST['Autor[nacionalidad]'] : '';

	$sql = "INSERT INTO autores(nombre, apaterno, amaterno, nacionalidad) VALUES ('$autorNombre', '$autorAPaterno', '$autorAMaterno', '$autorNacionalidad');";

    $au = queryPSQL($sql);
	if ($au) {
    	echo 'Autor guardado correctamente';
    	header('Location: menu.php');
	} else {
    	echo 'Error al guardar el autor.';
    	header('Location: alta_autor.php');
	}
}
 ?>