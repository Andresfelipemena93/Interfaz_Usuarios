<?php
include("configuracion.php");

$conexion = new mysqli($servername,$username,$password,$bd);
if (mysqli_connect_errno()){
    echo "Error al conectar con la base de datos", mysqli_connect_error();
    exit();
} //else {
    //echo 'Conexión exitosa a la base de datos';
//}
?>