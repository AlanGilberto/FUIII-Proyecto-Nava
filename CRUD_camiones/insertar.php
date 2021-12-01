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



$sql="INSERT INTO camiones VALUES('$id_camion','$chofer','$salida','$destino','$tipo','$marca','$pasajeros')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else{
}
?>