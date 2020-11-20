<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
$nombre = $_POST['registrar_nombre'];
$apellido = $_POST['registrar_apellido'];
$email = $_POST['registrar_email'];
$telefono = $_POST['registrar_telefono'];
$fech_ingreso = $_POST['registrar_fech_ingreso'];
$fech_salida = $_POST['registrar_fech_salida'];
$cant_personas = $_POST['registrar_cant_personas'];
$tipo_hab = $_POST['registrar_tipo_hab'];
$nro_hab = $_POST['registrar_nro_hab'];
$cant_dias = $_POST['registrar_cant_dias'];

$check="SELECT * FROM reservaciones WHERE email = '$email'";
$rs = mysqli_query($conexion,$check);
$data = mysqli_fetch_array($rs);

//var_dump($newUser) or die();

if($data[0] > 1) {
	echo "<script>alert('El usuario ya existe');
		window.location='/tesis/hotel/buscar_reservas.php'</script>";
} else {
	$newUser="INSERT INTO reservaciones (nombre, apellido, email, telefono, fech_ingreso, fech_salida, cant_personas, tipo_hab, nro_hab, cant_dias) VALUES ('$nombre','$apellido','$email','$telefono','$fech_ingreso','$fech_salida','$cant_personas','$tipo_hab','$nro_hab','$cant_dias')";
	if (mysqli_query($conexion,$newUser)) {
		echo "<script>alert('La habitación fue reservada con éxito!');
		window.location='/tesis/hotel/mis_reservas.php'</script>";
											
	}else {
		echo "<script>alert('Error');
		window.location='/tesis/hotel/buscar_reservas.php'</script>";
	}
}			


?>