<?php
/*Patricia Sofía Parra Domínguez*/
/*Datos de conexion a la base de datos*/
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "bdusuario";

// Crear conexion
$conn = new mysqli($db_host, $db_user, $db_pass ,$db_name);
// Comprobar conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   
?>