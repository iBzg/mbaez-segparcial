<?php

function conectar(){
	$conexion = pg_connect("host=127.0.0.1 port=5432 dbname=segundoexamen user=examen2 password=");
	return $conexion;
}
?>