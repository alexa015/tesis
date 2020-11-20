<?php

require("conexion.php");
$conex=ConectarDB();

if ($conex) {
	echo "Conexion exitosa :)";
} else {
	echo ":(";
}

?>