<?php
require "conexion.php";

session_start();

var_dump($_POST);

if (isset($_POST['name']) && $_POST['name'] )
{
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    

    $sql = "INSERT INTO documento (full_name, email, telefono, mensaje) VALUES ('$nombre','$email','$telefono','$mensaje')";
    $result = $conn->query($sql);

    if ($result) {
        header("Location: index.php");
    } else {
        echo json_encode(array('success' => 0));
    }

    $conn->close();
} 
else {
    header("Location: index.php");
}

?>
