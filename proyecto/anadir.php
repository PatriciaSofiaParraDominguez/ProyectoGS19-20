<?php
require "conexion.php";

session_start();

var_dump($_POST);

if (isset($_POST['email']) && $_POST['email'] && isset($_POST['password']) && $_POST['password']) {
    $nombre = $_POST['full_name'];
    $email = $_POST['email'];
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
    $telefono = $_POST['telefono'];
    

    $sql = "INSERT INTO user (full_name, email, username, password, telefono, rango_user) VALUES ('$nombre','$email','$user','$pass','$telefono', 'user')";
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