<?php

include("conexion.php");
$con=conectar();


$id_camion=$_POST['id_camion'];
$chofer=$_POST['chofer'];
$salida=$_POST['salida'];
$destino=$_POST['destino'];
$tipo=$_POST['tipo'];
$marca=$_POST['marca'];
$pasajeros = $_POST['pasajeros'];

$sql = "UPDATE camiones SET chofer='$chofer', salida='$salida', destino='$destino', tipo='$tipo', marca='$marca', pasajeros='$pasajeros' WHERE id_camion = '$id_camion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>