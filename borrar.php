<?php
include "./conectar.php";
$id=$_POST['id'];
if ($sqlModificar =$cone->query("DELETE FROM persona WHERE id=".$id)){
    echo "ok";
}else{
    echo "no ok";
}
?>