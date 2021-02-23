<?php
require "conexion.php";

session_start();

var_dump($_POST);

if (isset($_POST['name']) && $_POST['name'] )
{
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $telefono = $_POST['phone'];
    $lugar = $_POST['lugar'];
    $evento = $_POST['evento'];
    $mensaje = $_POST['message'];
    

    $sql = "INSERT INTO interpretaciones (full_name, email, telefono, lugar, evento, mensaje) VALUES ('$nombre','$email','$telefono','$lugar','$evento','$mensaje')";
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
