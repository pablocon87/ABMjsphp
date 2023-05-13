<?php
$host="localhost";
$usuario="root";
$password="";
$bd="albamo";
$cone= new mysqli($host,$usuario,$password,$bd);
if($cone->connect_errno){
    echo "error";
}
?>