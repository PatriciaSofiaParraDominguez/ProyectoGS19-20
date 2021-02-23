<?php
  session_start();
  include 'conexion.php';
  $_SESSION["num1"] = rand(0,10);
  $_SESSION["num2"] = rand(0,10);
?>
<!doctype html>
<html lang="en">
  <head>
    <!--Patricia Sofía Parra Domínguez-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

  </head>

  <body>
      <nav class="navbar navbar-expand-md navbar-light top-fixed">
          <a class="navbar-brand" href="#"><img src="imagenes/logo.jpg" class="rounded mx-auto d-block" alt="..."></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.php"><span class="sr-only">Home</span></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Traducciones
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="traducir.php">¿Qué puedo traducir?</a>
                      <a class="dropdown-item" href="simple.php">Traducción simple</a>
                      <a class="dropdown-item" href="interpretacion.php">Interpretación</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Presupuesto
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="sTraduccion.php">Solicitar traducción</a>
                      <a class="dropdown-item" href="sInterpretacion.php">Solicitar interpretación</a>
                      <a class="dropdown-item" href="promociones.php">Ofertas y promociones</a>
                      <a class="dropdown-item" href="entrega.php">Plazos de entrega</a>
                    </div>
                  </li>                  
                  <li class="nav-item">
                      <a class="nav-link" href="contacto.php">Contacto</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="loginadmin.php"><span class="sr-only">Admin</span></a>
                  </li>                  
              </ul>                                    
          </div>
          <form class="form-inline my-2 my-lg-0" id="botonlog">
                  <button type="button" class="btn btn-light"><a class="link" href="login.php">Entrar</a></button><p>&nbsp;</p>
          </form>
      </nav>

    <div class="row">
        <section class="col-12">
            <div class="row">
              <!--Entrar-->            
              <form class="col-md-12 col-lg-6 p-3 mt-3 rounded text-center" method="post" action="Administrar.php">
                <div class="form-group">
                  <label for="recipient-usuario" class="col-form-label">Usuario</label>
                  <input type="text" class="form-control" id="recipient-usuario" name="usuario1" required>
                </div>
                <div class="form-group">
                  <label for="recipient-contrasena" class="col-form-label">Contraseña</label>
                  <input type="password" class="form-control" id="recipient-contrasena" name="password1" required>
                </div><p>&nbsp;</p>
                <div class="form-group col-12 rounded text-center">
                  <input type="submit" name="submit" value="Entrar"><br>                  
                </div>
              </form>
              <!--Registrarse-->
              <form class="col-md-12 col-lg-6 p-3 mt-3 rounded text-center" method="post" action="anadir.php">
                <div class="form-group">
                  <label for="recipient-nombre" class="col-form-label">Nombre completo</label>
                  <input type="text" class="form-control" name="full_name" id="nombre1">
                </div>                                
                <div class="form-group">
                  <label for="recipient-email" class="col-form-label">Email</label>
                  <input type="text" class="form-control" name="email" id="recipient-email1">
                </div>                                
                <div class="form-group">
                  <label for="recipient-username" class="col-form-label">Nombre usuario</label>
                  <input type="text" class="form-control" name="usuario" id="recipient-username">
                </div>
                <div class="form-group">
                  <label for="recipient-contrasena" class="col-form-label">Contraseña</label>
                  <input type="password" class="form-control" name="password" id="recipient-contrasena1">
                </div>                                
                <div class="form-group">
                  <label for="recipient-telefono" class="col-form-label">telefono</label>
                  <input type="text" class="form-control" name="telefono" id="recipient-telefono1">
                </div>
                <div class="form-group">
                  <form method="post" action="solve.php">
                    Resuelve la operacion <?php echo $_SESSION["num1"]; ?>+ <?php echo $_SESSION["num2"];?>:<br>
                    <input type="text" name="captcha" required>
                    <input type="submit" value="Registrarse">
                  </form>
                </div>>
              </form> 
            </div>
        </section>    
    </div>

    <!--Footer-->
    <footer class="fixed-bottom text-left">
        <div class="container">
            <div class="row">
                <div class="col-12 text-secondary rounded">
                    Datos de contacto: Clara Marina Parra Domínguez
                    <br>
                    Correo: cmarinaparra@gmail.com
                    <br>
                    Telefono: +44 7871942411
                </div>
            </div>
        </div>
    </footer>

  <!--jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>