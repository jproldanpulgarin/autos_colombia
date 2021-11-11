<?php
include '../db/config.php';

//actualizar datos
   



if (isset($_POST['update'])) {
    $cod=$_GET['id'];
   echo "actualizando";
   $idd =           $_POST['id'];
   $placaa =        $_POST['placa'];
   $tipoo =         $_POST['tipo'];
   $doc =           $_POST['documento'];
   $nombree =       $_POST['nombre'];
   $fechaa =        $_POST['fecha'];
   $horaa =         $_POST['hora'];

   $sql="UPDATE tb_automoviles SET placa='$placaa',tipo='$tipoo',documento='$doc',nombre='$nombree',fecha='$fechaa',hora='$horaa' WHERE id = '$cod'";
   mysqli_query($con,$sql);

   header("location:../index.php");
}


?>
    


