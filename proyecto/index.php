<?php


 date_default_timezone_set('America/Bogota');
 $fecha_actual = date("Y-m-d");
 $hora_actual = date("H:i");



include("../db/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <?php require "partials/icono.php"?>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>AUTOS COLOMBIA</title>

    <style>
        *{
            font-family: 'Irish Grover', cursive;
        }
        .titulo{
            text-align: center;
            color: white;
        }
        img{
            width: 8%;
        }
    </style>


</head>
<body>
 
<div class="titulo">
    <img src="estilos/logo_autos_colombia.png" alt="">
    <h1>AUTOS COLOMBIA</h1>

</div>

<div class="container mt-5">
    <div>
            <nav class="barra_navegacion">
                <ul class="menu">
                    <li><a href="">Inicio</a> </li>
                    <li><a href="./inicio/INSERTAR.php">Ingresar Vehiculo</a> </li>
                    <li><a href="./inicio/BUSCAR.php"> Buscar Vehiculo</a> </li>
                </ul>
            </nav>
        </div>
    <div class="row">
        <div class="col-lg-4" >
            <form action="./inicio/INSERTAR.php" method="post" id="">
                <h1 class="titulo" style="color: white;"><strong>VEHICULO</strong></h1>
                <br>
                    <input type="text" name="placa" id="" class="form-control mb-3"  placeholder="Placa de Vehiculo" required><br>
                    
                    <select name="tipo" id="" class=" form-control form-control-lg"> <option value="carro">carro</option><option value="moto">moto</option></select><br>
                    <input type="text" name="documento" id="" class="form-control mb-3" placeholder="Documento" required><br>
                    <input type="text" name="nombre" id="" class="form-control mb-3" placeholder="Responsable del vehiculo" required><br>  
                    <input type="date" name="fecha" id="" class="form-control mb-3" value="<?=$fecha_actual?>" required><br>  
                    <input type="time" name="hora" id="" class="form-control mb-3" value="<?=$hora_actual?>" required><br>        
                    <input type="submit" value="Agregar" class="btn btn-primary">    
                    <tbody>
                    </div>
                        <div class="col-lg-8">
            <table class="table table-bordered" style="background: rgb(32, 181, 218);;">
                <thead  id="tabla">
                    <tr class="table-info" style="text-align: center;">
                        <th >ID</th>
                        <th >PLACA</th> 
                        <th >VEHICULO</th>
                        <th >DOCUMENTO</th>
                        <th >RESPONSABLE</th>
                        <th >FECHA ENTRADA</th>
                        <th >HORA</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        $consulta = $con->query("SELECT * FROM tb_automoviles" );
                        while ($row=$consulta->fetch_array()){
                            $id=$row['id'];
                            $placa=$row['placa'];
                            $tipo=$row['tipo'];
                            $documento=$row['documento'];
                            $nombre =$row['nombre'];
                            $fecha=$row['fecha'];
                            $hora=$row ['hora'];  
							
                        ?>
                            <tr>
                                <th ><?php echo $row['id']?></th>
                                <th ><?php echo $row['placa']?></th> 
                                <th ><?php echo $row['tipo']?></th>
                                <th ><?php echo $row['documento']?></th>
                                <th ><?php echo $row['nombre']?></th>
                                <th ><?php echo $row['fecha']?></th>
                                <th ><?php echo $row['hora']?></th>
                               
                            </tr>
                    <?php } ?>
                    
                </tbody>
                
          
            </table>
        </div>
            </form>
        </div>

        </div>
    </div>


</div>




</body>
</html>