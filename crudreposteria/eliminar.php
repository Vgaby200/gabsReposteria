<?php

include("conexion.php");
$con=conectar();

$id=$_GET['ID'];

$sql="DELETE FROM inventario WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: inventario.php");
    }
?>
