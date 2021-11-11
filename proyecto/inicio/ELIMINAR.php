<?php

include("../db/config.php");
$consulta = $con->query("SELECT * FROM tb_automoviles");
while ($row=$consulta->fetch_array()){
    $id=$row['id'];
    $placa=$row['placa'];
    $tipo=$row['tipo'];
    $documento=$row['documento'];
    $nombre =$row['nombre'];
    $fecha=$row['fecha'];
    $hora=$row ['hora'];  
    }
    $cod=$_GET['id'];


    $query="DELETE FROM tb_automoviles WHERE id = '$cod'";
    $result= mysqli_query($con,$query);
    
    header('location: ../index.php');

?>