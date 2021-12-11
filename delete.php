<?php

include("conexion.php");
$con=conectar();

/* Codigo que captura el ID de los nobmres cuando se eliminan */

$codigo=$_GET['id'];

/* Comando SQL para eliminar la variable cod_estudiante */

$sql="DELETE FROM usuarios WHERE id='$codigo'";
$query=mysqli_query($con,$sql);

/* Una vez hecho el proceso. Llevar a usuarios.php */

    if($query){
        Header("Location: usuarios.php");
    }
?>    