<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM destinos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Destinos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese sus datos</h1>
                                <form action="insertar.php" method="POST">

                                    
                                
                                <input type="text" class="form-control mb-3" name="destino" placeholder="destino">
                                <input type="text" class="form-control mb-3" name="salida" placeholder="salida">
                                <input type="text" class="form-control mb-3" name="horario_salida" placeholder="horario_salida" >
                                <input type="text" class="form-control mb-3" name="id_camion" placeholder="id_camion">
                                <input type="text" class="form-control mb-3" name="horario_regreso" placeholder="horario_regreso">
                                <input type="text" class="form-control mb-3" name="retraso" placeholder="retraso">
                                
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                    
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_viaje</th>
                                        <th>destino</th>
                                        <th>salida</th>
                                        <th>horario_salida</th>
                                        <th>id_camion</th>
                                        <th>horario_regreso</th>
                                        <th>retraso</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_viaje']?></th>
                                                <th><?php  echo $row['destino']?></th>
                                                <th><?php  echo $row['salida']?></th>
                                                <th><?php  echo $row['horario_salida']?></th>    
                                                <th><?php  echo $row['id_camion']?></th>    
                                                <th><?php  echo $row['horario_regreso']?></th>    
                                                <th><?php  echo $row['retraso']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id_viaje'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_viaje'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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