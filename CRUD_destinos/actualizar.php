<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM destinos WHERE id_viaje='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                        
                                <input type="text" class="form-control mb-3" name="id_viaje" placeholder="id_viaje" value="<?php echo $row['id_viaje']  ?>">
                                <input type="text" class="form-control mb-3" name="destino" placeholder="destino" value="<?php echo $row['destino']  ?>">
                                <input type="text" class="form-control mb-3" name="salida" placeholder="salida" value="<?php echo $row['salida']  ?>">
                                <input type="text" class="form-control mb-3" name="horario_salida" placeholder="horario_salida" value="<?php echo $row['horario_salida']  ?>">
                                <input type="text" class="form-control mb-3" name="id_camion" placeholder="id_camion" value="<?php echo $row['id_camion']  ?>">
                                <input type="text" class="form-control mb-3" name="horario_regreso" placeholder="horario_regreso" value="<?php echo $row['horario_regreso']  ?>">
                                <input type="text" class="form-control mb-3" name="retraso" placeholder="retraso" value="<?php echo $row['retraso']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>