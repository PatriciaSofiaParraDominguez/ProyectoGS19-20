<?php
require "conexion.php";

session_start();

var_dump($_POST);

if (isset($_POST['email']) && $_POST['email'] && isset($_POST['password']) && $_POST['password']) {
    $nombre = $_POST['full_name'];
    $user = $_POST['usuario'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $telefono = $_POST['telefono'];
    

    $sql = "INSERT INTO user (full_name, email, username, password, telefono) VALUES ('$nombre','$user','$email','$pass','$telefono')";
    $result = $conn->query($sql);

    if ($result) {
        echo json_encode(array('success' => 1));
    } else {
        echo json_encode(array('success' => 0));
    }

    $conn->close();
 } 
 else {
    echo json_encode(array('success' => 0));
 }

 ?>