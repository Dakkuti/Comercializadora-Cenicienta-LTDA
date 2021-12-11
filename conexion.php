<?php
function conectar(){

  /* Informacion del servidor.
     Host, Usuario y Contraseña */

    $host="localhost";
    $user="root";
    $pass="";

    /* Nombre de la base de datos */

    $bd="reto2ciclo4";

    /* Linea 17: Sirve para que tu servidor encuentre todas las bases de datos
    Que hay en tu Computador */

    $con=mysqli_connect($host,$user,$pass, $bd, 3308);

    /* Linea 22: Para especificar La base de datos */

    mysqli_select_db($con,$bd);

    return $con;
}
?>