<?php
include("conexion.php");
$con=conectar();

$id_viaje=$_POST['id_viaje'];
$destino=$_POST['destino'];
$salida=$_POST['salida'];
$horario_saldia=$_POST['horario_saldia'];
$id_camion=$_POST['id_camion'];
$horario_regreso=$_POST['horario_regreso'];
$retraso=$_POST['retraso'];


$sql="INSERT INTO destinos VALUES('$id_viaje','$destino','$salida','$horario_saldia','$id_camion','$horario_regreso','$retraso')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>