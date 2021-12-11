<?php

include("conexion.php");
$con=conectar();

/* Creacion de las variables: Estudiante, Dni, Nombre y Aprellido */

$codigo= $_POST['id'];
$dni= $_POST['dni'];
$nombre= $_POST['nombre'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono'];
$email= $_POST['email'];
$password = $_POST['password'];
$zona= $_POST['zona'];
$tipo= $_POST['tipo'];


/* Comando que captura los valores de las variables para editarlos  */

$sql="UPDATE usuarios SET identification='$dni', name='$nombre',address='$direccion',cellPhone='$telefono',email='$email',password='$password',zone='$zona',type='$tipo' WHERE id='$codigo'";
$query=mysqli_query($con,$sql);

/* Una vez hecho el edit. Llevar a index.php */

    if($query){
        Header("Location: usuarios.php");
    }
?>