<?php
    include("conexion.php");
    $con=conectar();
    $sql="SELECT * FROM inventario";
    
    $query=mysqli_query($con,$sql);
    //$row=mysqli_fetch_array($query);
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Repostery</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style2.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        </head> 
    <body>
        <div>
            <div>
                <h1 align="center">Inventario de postres🧁:</h1>
                    <form action="insertar.php" method="POST" align="center" name="fCRUD" onSubmit="return validar()">
                        <input type="text" name ="ID" placeholder="ID"> <br>
                        <input type="text" name="POSTRE" placeholder="POSTRE"> <br>
                        <input type="text" name="PRECIO" placeholder="PRECIO"> <br>
                        <input type="text" name="PRECIO" placeholder="IMAGEN"> <br>
                        <input type="text" name="DISP" placeholder="DISPONIBILIDAD"> <br>
                        <input type="submit" class="btn btn-primary" value="INSERTAR"> <br>
                    </form>

                    <script> 
                        function validar(){
                            if((document.fCRUD.POSTRE.value.length == 0) || (document.fCRUD.PRECIO.value.length == 0) || (document.fCRUD.DISP.value.length == 0)){
                            alert('Error: Campos vacios.');
                            return false;
                            }

                            if(isNaN(parseInt(document.fCRUD.PRECIO.value))){
                            alert('Error: ingrese un numero');
                            return false;
                            }

                            if(isNaN(parseInt(document.fCRUD.DISP.value))){
                            alert('Error: ingrese un numero valido');
                            return false;
                            }

                            return true;
                        }
                    </script>

            </div>
            <div>
                <table width="70%" border="1px" align="center">
                        <tr>
                            <br>
                            <th>POSTRE</th>
                            <th>PRECIO</th>
                            <th>BILIDAD</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php  echo $row['postre']?></th>
                                    <th><?php  echo $row['precio']?></th>
                                    <th><?php  echo $row['disp']?></th>    
                                    <th><a href="modificar.php?ID=<?php echo $row['id'] ?>" class="btn btn-info">MODIFICAR</a></th>
                                    <th><a href="eliminar.php?ID=<?php echo $row['id'] ?>" class="btn btn-danger">ELIMINAR</a></th>  
                                </tr>
                            <?php 
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>        
    </body>
</html>