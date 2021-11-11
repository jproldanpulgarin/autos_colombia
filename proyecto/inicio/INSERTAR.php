<?php
include '../db/config.php';

$placaa =        $_POST['placa'];
$tipoo =         $_POST['tipo'];
$documento =     $_POST['documento'];
$nombree =       $_POST['nombre'];
$fechaa =        $_POST['fecha'];
$horaa =         $_POST['hora'];

//insertar datos
   
    $sql="INSERT INTO tb_automoviles(placa, tipo, documento, nombre, fecha,hora) VALUES('$placaa','$tipoo','$documento','$nombree','$fechaa','$horaa')";
    $ejecutar =  mysqli_query($con,$sql);

    if($ejecutar){
        header("location: ../index.php");
    }
    



?>