<?php

include "./conectar.php";
include "./permitidos.php";
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni = $_POST['dni'];
$fechanac = $_POST['fechanac'];
$correo = $_POST['correo'];
$nnFecha=date("Y-m-d H:i:s",strtotime($fechanac));
if (permited($nombre)==false || permited($apellido)==false || permitedNumber($dni)==false || permited($fechanac)==false || permited($correo)==false || permitedNumber($id)==false){
    echo "no permitido";
    return;
}
if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    if ($sqlModificar =$cone->query("UPDATE persona SET nombre='$nombre',apellido='$apellido',dni='$dni',fechanac='$nnFecha',correo='$correo' WHERE id=".$id)){
        echo "ok";
    }else{
        echo "no ok";
    }
}else{
    echo "no permitido";
    return;
}

?>