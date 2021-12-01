<?php
include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$ocupacion=$_POST['ocupacion'];


$sql="INSERT INTO empleados VALUES('$id_empleado','$nombre','$apellido1','$apellido2','$telefono','$direccion','$ocupacion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>