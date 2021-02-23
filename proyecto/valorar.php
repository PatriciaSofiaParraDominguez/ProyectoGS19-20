<?php
if (isset($_POST['submitRatingStar'])) {
    //procesar el rating
    header('location: indexUsuario.php');
    echo '<div class="alert alert-success">Rating recibido: <strong>'.$_POST['rate'].'</strong>.</div>';
    
    $comentario = $_POST['rate'];
    
    $sql = "INSERT INTO comentario (valoracion) VALUES ('$nombre')";
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