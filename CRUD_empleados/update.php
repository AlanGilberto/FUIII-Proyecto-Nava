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

$sql = "UPDATE empleados SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', telefono='$telefono', direccion='$direccion', ocupacion='$ocupacion' WHERE id_empleado = '$id_empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>