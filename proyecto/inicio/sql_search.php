<?php
include '../db/config.php';


//insertar datos
   
$sql = "SELECT * FROM tb_automoviles WHERE id=$id";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
    


?>
    


