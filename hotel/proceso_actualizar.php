
<?php
//se establece una conexion a la base de datos
include_once 'conexion.php';
//si se han enviado datos

 
$cod_huesp = $_REQUEST['id'];
$fech_ingreso = $_REQUEST['fech_ingreso'];
$fech_salida = $_REQUEST['fech_salida'];
$cant_adultos = $_REQUEST['cant_adultos'];
$cant_niños = $_REQUEST['cant_niños'];
$tipo_hab = $_REQUEST['tipo_hab'];


$actualizar = "UPDATE registro SET fech_ingreso = '$fech_ingreso', fech_salida = '$fech_salida', cant_adultos = '$cant_adultos', cant_niños = '$cant_niños', tipo_hab = '$tipo_hab' WHERE cod_huesp = '$cod_huesp'";

$resultado = mysqli_query($conexion, $actualizar);

if($resultado) {
	echo "<script>alert('Se han actualizado los cambios con éxito :)');
	window.location='/hotel/mostrar_reservas.php'</script>";
} else {
	header ('location: ./');
}


?>