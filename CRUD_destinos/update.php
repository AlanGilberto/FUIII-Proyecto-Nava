<?php

include("conexion.php");
$con=conectar();


$id_viaje=$_POST['id_viaje'];
$destino=$_POST['destino'];
$salida=$_POST['salida'];
$horario_salida=$_POST['horario_salida'];
$id_camion=$_POST['id_camion'];
$horario_regreso=$_POST['horario_regreso'];
$retraso=$_POST['retraso'];



$sql = "UPDATE destinos SET destino='$destino', salida='$salida', horario_salida='$horario_salida', id_camion='$id_camion', horario_regreso='$horario_regreso', retraso = '$retraso' WHERE id_viaje = '$id_viaje'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>