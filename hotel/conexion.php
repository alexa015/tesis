<?php

$servidor="localhost";
$usuario="root";
$password="";
$bd="ohana";

$conexion=mysqli_connect($servidor,$usuario,$password,$bd) or die ('Error al conectar con la base de datos');

function conexion() {

	$servidor="localhost";
	$usuario="root";
	$password="";
	$bd="ohana";

	$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
	return $conexion;

}

?>