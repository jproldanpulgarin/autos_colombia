<?php

/*
 date_default_timezone_set('America/Bogota');
 $fecha_actual = date("Y-m-d");
 $hora_actual = date("H:i");*/



include("../db/config.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="../css/styles.css">
    <?php require "../partials/icono.php"?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>AUTOS COLOMBIA</title>

<style>
      *{
            font-family: 'Irish Grover', cursive;
        }
    body{
      margin:99%;
        margin: 0 auto;
            }
        
      
</style>

</head>
<body>

<div class="container mt-5 ">
<?php include "../partials/menu.php";?>
<div class="row">
      
      <div class="col-lg-3" >
          <form action="BUSCAR.php" method="post" id="">
              <h3 style="color: white;"><strong>BUSQUEDA DE INFORMACION</strong></h3>
              <br>
                  <input type="text" name="documento_buscar" id="" class="form-control mb-3" placeholder="documento" ><br>
                   
                  <input type="submit" value="Buscar" class="btn btn-primary">          
                  
          </form>
      </div>
    
        <div class="col-lg-9">
            <table class="table table-bordered" style="background: rgb(32, 181, 218);">
                <thead class="table-success table-striped">
                    <tr class="table-info" style="text-align: center;" >
                        <th >ID</th>
                        <th >PLACA</th> 
                        <th >VEHICULO</th>
                        <th >DOCUMENTO</th>
                        <th >RESPONSABLE</th>
                        <th >FECHA ENTRADA</th>
                        <th >HORA</th>
                        <th colspan="2">HERRAMIENTAS</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        
                       $consulta = $con->query("SELECT * FROM tb_automoviles WHERE documento LIKE '%$_POST[documento_buscar]%'" );
                        while ($row=$consulta->fetch_array()){
                            $id=$row['id'];
                            $placa=$row['placa'];
                            $tipo=$row['tipo'];
                            $documento=$row['documento'];
                            $nombre =$row['nombre'];
                            $fecha=$row['fecha'];
                            $hora=$row ['hora'];  
                        ?>
                            <tr style="text-align: center;">
                                <th ><?php echo $row['id']?></th>
                                <th ><?php echo $row['placa']?></th> 
                                <th ><?php echo $row['tipo']?></th>
                                <th ><?php echo $row['documento']?></th>
                                <th ><?php echo $row['nombre']?></th>
                                <th ><?php echo $row['fecha']?></th>
                                <th ><?php echo $row['hora']?></th>
                                <th><a href="ACTUALIZAR.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="ELIMINAR.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a></th>                                                              
                            </tr>
                    <?php } ?>
                    
                </tbody>
                
          
            </table>
        </div>
    </div>


</div>




</body>
</html>