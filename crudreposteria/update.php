<?php

include("conexion.php");
$con=conectar();

$id=$_POST['ID'];
$postre=$_POST['POSTRE'];
$precio=$_POST['PRECIO'];
$disp=$_POST['DISP'];

$sql="UPDATE reposteria SET postre='$postre', precio='$precio', disp='$disp' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: inventario.php");
    }
?>