<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM camiones";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Camiones</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Registra los camiones</h1>
                                <form action="insertar.php" method="POST">

                             
                                <input type="text" class="form-control mb-3" name="chofer" placeholder="chofer">
                                <input type="text" class="form-control mb-3" name="salida" placeholder="salida">
                                <input type="text" class="form-control mb-3" name="destino" placeholder="destino">
                                <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo">
                                <input type="text" class="form-control mb-3" name="marca" placeholder="marca">
                                <input type="text" class="form-control mb-3" name="pasajeros" placeholder="pasajeros">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                  
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_camion</th>
                                        <th>chofer</th>
                                        <th>salida</th>
                                        <th>destino</th>
                                        <th>tipo</th>
                                        <th>marca</th>
                                        <th>pasajeros</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_camion']?></th>
                                                <th><?php  echo $row['chofer']?></th>
                                                <th><?php  echo $row['salida']?></th>
                                                <th><?php  echo $row['destino']?></th>    
                                                <th><?php  echo $row['tipo']?></th>    
                                                <th><?php  echo $row['marca']?></th>    
                                                <th><?php  echo $row['pasajeros']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id_camion'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_camion'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }while($row=mysqli_fetch_array($query));
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>