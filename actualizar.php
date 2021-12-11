<?php
include("conexion.php");
$con=conectar();

/* Codigo que captura el ID de los nobmres */

$id=$_GET['id'];

/* Comando para capturar todo lo que tenga el valor ID */

$sql="SELECT * FROM usuarios WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<!-- Meta datos que sirven para la Localizacion de la Pagina Web y sus Referencias -->

<head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">

                    <!-- Formulario para la parte de actualizar -->
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="dni" placeholder="Indentificacion" value="<?php echo $row['identification']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['name']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección" value="<?php echo $row['address']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono" value="<?php echo $row['cellPhone']  ?>">
                                <input type="text" class="form-control mb-3" name="email" placeholder="Email" value="<?php echo $row['email']  ?>">
                                <input type="text" class="form-control mb-3" name="password" placeholder="Contraseña" value="<?php echo $row['password']  ?>">
                                <input type="text" class="form-control mb-3" name="zona" placeholder="Zona" value="<?php echo $row['zone']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo" value="<?php echo $row['type']  ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>