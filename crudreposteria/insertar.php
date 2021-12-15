<?php
include("conexion.php");
$con=conectar();

$id=$_POST['ID'];
$postre=$_POST['POSTRE'];
$precio=$_POST['PRECIO'];
$existencia=$_POST['DISP'];


$sql="INSERT INTO inventario VALUES('$id','$postre','', '','$precio','$disp')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: inventario.php");
}else {
}
?>