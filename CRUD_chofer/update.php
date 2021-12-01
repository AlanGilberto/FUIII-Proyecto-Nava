<?php

include("conexion.php");

$con=conectar();
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];

$sql = "UPDATE chofer SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', edad='$edad', telefono='$telefono',direccion ='$direccion' WHERE id = '$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
   
?>