<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM camiones WHERE id_camion='$id'";
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
                    
                        
                                <input type="text" class="form-control mb-3" name="id_camion" placeholder="id_camion" value="<?php echo $row['id_camion']  ?>">
                                <input type="text" class="form-control mb-3" name="chofer" placeholder="chofer" value="<?php echo $row['chofer']  ?>">
                                <input type="text" class="form-control mb-3" name="salida" placeholder="salida" value="<?php echo $row['salida']  ?>">
                                <input type="text" class="form-control mb-3" name="destino" placeholder="destino" value="<?php echo $row['destino']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo" value="<?php echo $row['tipo']  ?>">
                                <input type="text" class="form-control mb-3" name="marca" placeholder="marca" value="<?php echo $row['marca']  ?>">
                                <input type="text" class="form-control mb-3" name="pasajeros" placeholder="pasajeros" value="<?php echo $row['pasajeros']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>