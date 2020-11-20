<?php
//se lee la cookie de sesion
session_start();
//se establece una conexión a la base de datos
include 'conexion.php';
//se validarán los campos si la sesion aún no está abierta


if (empty($_SESSION) and isset($_POST['datos_introducidos_email']) and isset($_POST['datos_introducidos_password'])){
    //se escaparán caracteres peligrosos
    $email=mysqli_real_escape_string($conexion,$_POST['datos_introducidos_email']);
    $contraseña_introducida=$_POST['datos_introducidos_password'];
    //se hará la consulta a la base de datos
    $consulta='select * from usuarios where email="'.$email.'"';
    //si hubo un resultado
    if ($ejecución_de_la_consulta=$conexion->query($consulta)){
        //se obtiene la contraseña registrada
        
        $contraseña_guardada=$ejecución_de_la_consulta->fetch_assoc();
        //var_dump($contraseña_guardada['nombre']) or die();
        //se compara la contraseña
        $verificar_contraseña=password_verify($contraseña_introducida,$contraseña_guardada['password']);
        //si el resultado de la comparación ha sido verdadero
        if ($verificar_contraseña){
            //se asigna la sesión y redirecciona
            $_SESSION['name']=$contraseña_guardada['nombre'];
            header ('location: /tesis/hotel/home.php');
        }//si la contraseña es incorrecta
        else{
            header ('location: ./');
        }
    }//si el usuario no está registrado
    else{
        header ('location: ./');
    }
}//si hay una sesion abierta o no se enviaron datos
else{
    header ('location: cerrar_sesion.php');
}
?>