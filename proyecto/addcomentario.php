<?php
require "conexion.php";

session_start();

var_dump($_POST);

if (isset($_POST['user']) && $_POST['user'] )
{
    $valor = $_POST['rate'];
    $nombre = $_POST['user'];
    $comentario = $_POST['message'];
    
    
    $sql = "INSERT INTO comentario (valoracion, nombre, comentario) VALUES ('$valor','$nombre','$comentario')";
    $result = $conn->query($sql);

    if ($result) {
        header("Location: indexUsuario.php");
    } else {
        echo json_encode(array('success' => 0));
    }

    $conn->close();
} 
else {
    header("Location: indexUsuario.php");
}

?>