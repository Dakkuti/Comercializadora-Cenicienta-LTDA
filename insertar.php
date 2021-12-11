<?php
include("conexion.php");
$con=conectar();

/* Creacion de las variables: Estudiante, Dni, Nombre y Aprellido */

$codigo= $_POST['id'];
$dni= $_POST['dni'];
$nombre= $_POST['nombre'];
$direccion= $_POST['dirección'];
$telefono= $_POST['telefono'];
$email= $_POST['email'];
$password = $_POST['password'];
$zona= $_POST['zona'];
$tipo= $_POST['tipo'];


/* Comando que captura los valores de las variables  */

$sql="INSERT INTO usuarios VALUES('$codigo','$dni','$nombre','$direccion','$telefono','$email','$password','$zona','$tipo')";
$query= mysqli_query($con,$sql);

/* Una vez hecha la conexion. Llevar a usuarios.php */

if($query){
    Header("Location: usuarios.php");
    
}else {    
}
?>