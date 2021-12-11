<?php
    include("conexion.php");
    /*conexcion php*/
    $con=conectar();
    /* retorno del con produccido en conexion*/
    $sql="SELECT * FROM usuarios";
    /*llamado de los objetos de la tabla 1 en nuestra base de datos*/
    $query=mysqli_query($con,$sql);


    $row=mysqli_fetch_array($query);


    /*accion de query y redireccion de rwo*/
?>

<!DOCTYPE html>
<html lang="en">

   <!-- Meta datos que sirven para la Localizacion de la Pagina Web y sus Referencias -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de Registro</title>
    <link href="css/css.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<?php include "includeshtml/navbarAdmin.html"; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 p-4  mb-2 text-dark">

             <!-- Seccion donde se insertan los datos -->

            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                   
                                    <input type="text" class="form-control mb-4 " name="dni" placeholder="Identificación">
                                    <input type="text" class="form-control mb-4" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-4" name="direccion" placeholder="Dirección">
                                    <input type="text" class="form-control mb-4" name="telefono" placeholder="Teléfono">
                                    <input type="text" class="form-control mb-4" name="email" placeholder="Email">
                                    <input type="text" class="form-control mb-4" name="password" placeholder="Contraseña">
                                    <input type="text" class="form-control mb-4" name="zona" placeholder="Zona">
                                    <input type="text" class="form-control mb-4" name="tipo" placeholder="Tipo">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
            </div>
            <div class="col-md-8">
            <table class="table">
                                <thead class="table-success table-striped border ">

                                <!-- Titulo de los campos donde se insertan los datos -->

                                    <tr>
                                        
                                        <th scope="col">Identificación</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">Zona</th>
                                        <th scope="col">Tipo</th>

                                    </tr>
                                </thead>

                                <tbody class="table-info ">

                                 <!-- Seccion donde se guardan los datos ya ingresados -->

                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr class=" border border-primary border-bottom border border-2">
                                       
                                                <th scope="row"><?php  echo $row['identification']?></th>
                                                <th ><?php  echo $row['name']?></th>
                                                <th ><?php  echo $row['address']?></th>
                                                <th ><?php  echo $row['password']?></th>
                                                <th ><?php  echo $row['cellPhone']?></th> 
                                                <th ><?php  echo $row['zone']?></th>   
                                                <th ><?php  echo $row['type']?></th> 

                                             <!-- Seccion de botones "Editar" y "Eliminar" -->

                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
            </div>
        </div>
    </div>
</body>
</html>