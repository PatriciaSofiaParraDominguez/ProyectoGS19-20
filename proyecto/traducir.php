<?php
  session_start();
  include 'conexion.php';
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
              </ul>                                    
          </div>
          <form class="form-inline my-2 my-lg-0" id="botonlog">
                  <button type="button" class="btn btn-light"><a class="link" href="login.php">Entrar</a></button><p>&nbsp;</p>
          </form>
      </nav>
  <!--Header-->
    <header>
      <div class="jumbotron jumbotron-fluid bg-grey">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="text-center display-4">Clara Marina Parra Domínguez</h1>
              <p class="text-center">Traductora interprete inglés-español.</p>
              <p class="text-center">Con base en Londres, ofrece garantias de traducciones de calidad y seriedad todo a precios competentes</p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="row">
      <section class="col-12">
        <h1 class="col-12 rounded text-center">¿Qué puedo traducir?</h1>
        <div class="row">
          <p class="col-12 rounded text-center">Soy experta en Traduccion normal de documentos y Interpretación.</p>            
          <article class="col-md-12 col-lg-6 p-3 mt-3 rounded text-center">
            <h3>Traducción Simple</h3>
            <p>Traducción de documentos, manuales, cuentas,<br> manuales, licitaciones, informes, catálogos, publicaciones...</p>
            <a href="simple.php" type="button" class="btn btn-light">+ información aqui</a>
          </article>
          <article class="col-md-12 col-lg-6 p-3 mt-3 rounded text-center">
            <h3>Interpretación</h3>
            <p>Interpretaciones para reuniones, ferias, congresos, eventos...</p>
            <a href="interpretacion.php" type="button" class="btn btn-light">+ Información aqui</a>
          </article> 
        </div>
      </section>
      <section class="col-12">
        <h1 class="col-12 rounded text-center">Traducciones Simples y Interpretaciones</h1>
        <div class="row">           
          <article class="col-12 rounded text-center">
            <h3>Traducciones normales</h3>
            <p>Contratos, cuentas, manuales, licitaciones, informes, catálogos, publicaciones</p>
            <p>Interpretaciones en Castellano para todo tipo de reuniones, eventos y congresos presenciales.</p>
          </article> 
        </div>
      </section>
    </div>
    <p>&nbsp;</p>

    <!--Footer-->
    <footer class="fixed-bottom text-left">
        <div class="container text-center">
            <div class="row">
                <div class=" text-secondary rounded">
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
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

  </body>
</html>