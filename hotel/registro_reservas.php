<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos

 
$fech_ingreso = $_POST['registrar_fech_ingreso'];
$fech_salida = $_POST['registrar_fech_salida'];
$cant_personas = $_POST['registrar_cant_personas'];
$tipo_hab = $_POST['registrar_tipo_hab'];

$insertar = "INSERT INTO reservaciones (fech_ingreso, fech_salida, cant_personas, tipo_hab) VALUES ('$fech_ingreso', '$fech_salida', '$cant_personas', '$tipo_hab')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado) {
    echo "<script>alert('Haz reservado correctamente esta habitación! :)');
    window.location='/hotel/mostrar_reservas.php'</script>";
} else {
    header ('location: ./');
}


?>