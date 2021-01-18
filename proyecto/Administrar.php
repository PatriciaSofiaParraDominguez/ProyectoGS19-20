<?php
session_start();
include 'conexion.php';

//Recibimos las dos variables
var_dump("$usuario.","$password.");
$usuario =$_POST["usuario"];
$password =$_POST["password"];
/* Realizamos una consulta por cada tabla para buscar en que tabla se encuentra
el usuario que está intentando acceder */
$resultado_admin = mysql_query("SELECT usuario,password FROM admin WHERE username = '".$usuario."' AND password = '".$password."'");
$resultado_user = mysql_query("SELECT usuario,password FROM user WHERE usuario = '".$usuario."' AND password = '".$password."'");
if (!$resultado_user || !$resultado_admin) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: '". mysql_error()."'";
    exit;
}
$user = mysql_fetch_array($resultado_user);
$admin = mysql_fetch_array($resultado_admin);
/* Sabemos que en el caso que exista el usuario se encontrará en una de estas dos tablas,
por lo tanto se guardará en alguno de nuestras dos variables que guardan nuestra consulta */
//print($user) 
  /* Ahora comprobamos que variable contiene al usuario*/
 if($user['usuario'] == $usuario){
    $_SESSION['user']= $user['usuario'];
    header("index.php");
    exit();
}else if($admin['usuario'] == $usuario) {
   $_SESSION['admin']= $admin['usuario'];
   header("indexAdmin.php");
   exit();
}else {
/* Si el usuario no se encuentra en ninguna de las dos tablas imprime el siguiente mensaje */
    $mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
  echo $mensajeaccesoincorrecto;
}
?>