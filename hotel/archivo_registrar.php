<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos

 
$nombre = $_POST['datos_registrar_nombre'];
$email = $_POST['datos_registrar_email'];
$password= password_hash($_POST['datos_registrar_contraseña'],PASSWORD_DEFAULT);

$insertar = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado) {
	echo "<script>alert('Se ha registrado el usuario con éxito :)');
	window.location='/hotel/principal.php'</script>";
} else {
	header ('location: ./');
}


?>