<?php
include('conec.php');
if(isset($_POST['enviar'])){

    $nombre =$_POST['nombre'];
    $apellidopaterno =$_POST['apellidopaterno'];
    $apellidomaterno =$_POST['apellidomaterno'];
    $telefono =$_POST['telefono'];
    $correo=$_POST['correo'];
    $usuario=$_POST['usuario'];
    $pasword=$_POST['pasword'];
    $insertarinformacion = "INSERT INTO datoper (nombre,apellidopaterno,apellidomaterno,telefono,correo,usuario,pasword) VALUE 
    ('$nombre','$apellidopaterno','$apellidomaterno','$telefono','$correo','$usuario','$pasword')";

$resultado = mysqli_query ($conexion,$insertarinformacion);


    if(!$resultado){
        echo '<script>alert("Los datos se insertaron")</script>';
    }
    else{
        echo '<script>alert("Los datos si se insertaron")</script>';
    }
}
header('Location: personal.php');
?>