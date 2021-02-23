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
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

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
				<div class="container mt-5 shadow-lg p-3 mb-5 bg-white rounded" style="background-color: #F5F5F5;text-align:center;">
					<div class="row">
						<div class="col-12 mt-4">
							<h2>Editar</h2>
							<div class="row">
								<div class="col-12 mt-4">
									<?php 
										include("function.php");
										$id = $_GET['id'];
										select_id('user','id_user',$id);
									?>
									<form class="form-horizontal" method="POST" action="" autocomplete="off">
										<!-- esto es para coger el id del usuario cuando le demos a aceptar y los campos que queramos añadir-->
										<input type="hidden" name="iduser" value="<?php echo $fila['id_user']?>">
										<div class="form-group row">
											<label for="statictnombre" class="col-sm-2 col-form-label">Nombre completo</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="nombre1" value="<?php echo $fila->full_name?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="statictnombre" class="col-sm-2 col-form-label">Email</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="email1" value="<?php echo $fila['email']?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="staticEmail" class="col-sm-2 col-form-label">Nombre Usuario</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="username1" value="<?php echo $fila['username'];?>">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
											<div class="col-sm-10">
												<input type="text" class="form-control"  name="password1" value="<?php echo $fila['password']?>" placeholder="Password">
											</div>
										</div>
										<div class="form-group row">
											<label for="statictelefono" class="col-sm-2 col-form-label">Telefono</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="telefono1" value="<?php echo $fila['telefono']?>">
											</div>
										</div>
										<input type="submit" name="Aceptar" class="btn btn-primary" value="Aceptar">
										<a href="indexAdmin.php" class="btn btn-danger">Cancelar</a>
									</form>
									<?php
    									if(isset($_POST['submit'])){
        									$field = array("nombre1"=>$_POST['full_name'], "email1"=>$_POST['email'], "username1"=>$_POST['username'], "password1"=>$_POST['password'], "telefono1"=>$_POST['telefono']);
        									$tbl = "user";
        									edit($tbl,$field,'iduser',$id);
        									header("location:indexAdmin.php");
    									}
									?>
								</div>
							</div>
						</div>
					</div> 
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