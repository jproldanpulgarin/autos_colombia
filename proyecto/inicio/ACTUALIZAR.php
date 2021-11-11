<?php

include("../db/config.php");
 date_default_timezone_set('America/Bogota');
 $id = $_GET['id'];
include "sql_search.php";


    
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
        .container{
            padding: 30px;
        }
        form  input{
            text-align: center;
            
        }
        form  input:hover{
           filter: contrast(200%);
        }
        
       
      
    </style>


</head>
<body>
<div>
    <div class="container">
    <?php require "../partials/menu.php";?>
        <div class="row">
            <div class="col-lg-15" >
            <
                <form action="sql_update.php?id=<?php echo $_GET['id']?>;" method="post" class="formedit" >
                    <h1 class="titulo" style="color: white;"><strong>ACTUALIZAR</strong></h1>
                    
                    <br>
                        <input type="hidden" name="id" value="<?=$row['placa']?>">
                        <input type="text"   name="placa" id="" class="form-control mb-3" value="<?=$row['placa']?>" required><br>
                        <input type="text"   name="tipo" id="" class="form-control mb-3" value="<?=$row['tipo']?>" required><br>
                        <input type="text"   name="documento" id="" class="form-control mb-3" value="<?=$row['documento']?>" required><br>
                        <input type="text"   name="nombre" id="" class="form-control mb-3" value="<?=$row['nombre']?>" required><br>  
                        <input type="date"   name="fecha" id="" class="form-control mb-3" value="<?=$row['fecha']?>" required><br>  
                        <input type="time"   name="hora" id="" class="form-control mb-3" value="<?=$row['hora']?>" required><br>
                        <input type="submit" value="Actualizar" class="btn btn-success"name="update">
                        <a href="../index.php"><input type="button" value="Cancelar" class="btn btn-danger" ></a> <br>   
                </form>
                
            </div>
        </div>


    </div>
    <div>
    
    </div>
</div>





</body>
</html>