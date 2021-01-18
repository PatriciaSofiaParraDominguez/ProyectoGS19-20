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
      <nav class="navbar navbar-expand-md navbar-dark top-fixed">
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
              <h1 class="text-center display-4">Interpretación</h1>
              <p>&nbsp;</p>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="row">
        <section class="col-12">
            <div class="row">            
                <article class="col-md-12 col-lg-6 p-3 mt-3 rounded text-center">
                    <h3>1. Interpretación consecutiva</h3>
                    <p>¿Qué es la interpretación consecutiva? <br>
                    La interpretación se denomina "consecutiva" cuando el ponente hace una pausa después de cada frase, dando tiempo al intérprete a traducir dicha frase. El intérprete se sitúa junto al ponente y ambos van hablando de forma alterna, pero fluída. <br>
                    Interpretación para reuniones de negocios, eventos, etc <br>
                    La interpretación consecutiva es la más habitual, y se usa en reuniones de negocios, visitas comerciales, visitas técnicas, presentaciones, cursos y jornadas de formación, ruedas de prensa, etc. <br>
                    </p>
                </article>
                <article class="col-md-12 col-lg-6 p-3 mt-3 rounded text-center">
                    <h3>2. Interpretación de acompañamiento</h3>
                    <p>¿Qué es la interpretación de acompañamiento? <br>
                    En la interpretación de acompañamiento el intérprete acompaña al cliente durante todo el tiempo de la interpretación, traduciendo para él sea cual sea la necesidad: visitas, gestiones, documentación, reuniones, comidas, etc. El intérprete acompaña físicamente al cliente y traduce de forma consecutiva tanto a él como a su interlocutor. <br>
                    Interpretación para visitas y eventos: <br>
                    La interpretación de acompañamiento es muy habitual cuando se recibe a un partner, cliente o distribuidor extranjero, que viene para realizar reuniones, visitas, comidas, etc. El intérprete cubre todas las necesidades lingüísticas del cliente durante su estancia.<br>
                    </p>
                </article> 
            </div>
        </section>    
    </div>

    <p>&nbsp;</p>

    <div class="container">
      <section class="b-section">
        <div class="container text-center">
          <h2>Contacto</h2>
          <p class="lead text-center">
            Consúlta cualquier duda o pregunta sobre tu proyecto de traducción
          </p> 
          <a href="tel:625507360" type="button" class="btn btn-light">Llámanos</a> 
          <a href="mailto:psparradominguez@gmail.com" type="button" class="btn btn-light">cmarinaparra@gmail.com</a>
          <p>&nbsp;</p>            
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
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

  </body>
</html>