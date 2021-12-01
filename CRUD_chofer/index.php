<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM chofer";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Chofer</title>
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

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                    <input type="text" class="form-control mb-3" name="apellido1" placeholder="apellido1">
                                    <input type="text" class="form-control mb-3" name="apellido2" placeholder="apellido2">
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="edad">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>nombre</th>
                                        <th>apellido1</th>
                                        <th>apellido2</th>
                                        <th>edad</th>
                                        <th>telefono</th>
                                        <th>direccion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>    
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido1']?></th>
                                                <th><?php  echo $row['apellido2']?></th>
                                                <th><?php  echo $row['edad']?></th>    
                                                <th><?php  echo $row['telefono']?></th>    
                                                <th><?php  echo $row['direccion']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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