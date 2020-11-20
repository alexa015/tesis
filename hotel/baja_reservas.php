<?php
//se establece una conexion a la base de datos
include_once 'conexion.php';

//si se han enviado datos


$cod_huesp = $_REQUEST['id']; 


$insertar = "DELETE FROM registro WHERE cod_huesp = '$cod_huesp'";


$resultado = mysqli_query($conexion, $insertar);


if($resultado) {
    echo "<script>alert('Se ha eliminado la reserva.');
    window.location='/hotel/mostrar_reservas.php'</script>";
} else {
    header ('location: ./');
}


?>