<?php
include "./conectar.php";
include "./permitidos.php";
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni = $_POST['dni'];
$fechanac = $_POST['fechanac'];
$correo = $_POST['correo'];
$nnFecha=date("Y-m-d H:i:s",strtotime($fechanac));
if (permited($nombre)==false || permited($apellido)==false || permitedNumber($dni)==false || permited($fechanac)==false || permited($correo)==false){
    echo "no permitido";
    return;
}
if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    if ($sqlinsertar =$cone->query("INSERT INTO persona (nombre,apellido,dni,fechanac,correo) VALUE ('$nombre','$apellido','$dni','$nnFecha','$correo')")){
        echo "ok";
    }else{
        echo "no ok";
    }
}else{
    echo "no permitido";
    return;
}
?>