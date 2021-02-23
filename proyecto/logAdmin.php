<?php
session_start();
include 'conexion.php';
 
//Recibimos las dos variables
$user=$_POST['usuario1'];
$password=$_POST['password1'];
 
/* Realizamos una consulta por cada tabla para buscar en que tabla se encuentra 
el usuario que está intentando acceder mysqli_query( username, password, */
$username = "SELECT username, password FROM admin WHERE username = '$user' AND password = '$password'";
/* Sabemos que en el caso que exista el usuario se encontrará en una de estas 
dos tablas, por lo tanto se guardará en alguno de nuestras dos variables 
que guardan nuestra consulta */
 
/* Ahora comprobamos que variable contiene al usuario*/
if(isset($username) > '0') 
{
    /* Si entra en este if significa que el que intenta acceder es un usuario normal, 
    por lo tanto le creamos una sesión */
  session_start();
 
  $_SESSION['admin']="$username";
 
    /* Nos dirigimos al espacio personal de losusuarios usando header que nos 
    redireccionará a la página que le indiquemos */
  header("Location: indexAdmin.php");
 
    /* terminamos la ejecución ya que si redireccionamos ya no nos interesa 
    seguir ejecutando código de este archivo */
  exit(); 
}

else 
{
   /* Si no el usuario no se encuentra en ninguna de las dos tablas se
   imprime el siguiente mensaje */
   $mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
   echo $mensajeaccesoincorrecto;
   header("Location: index.php");
}

?>