<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$debug = $_GET["debug"];
$dbname = "BDproyec";
$dbtable = "Usuarios";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (isset($debug) && $debug ==1) {
	if ($conn->connect_error) {
   		die("Connection failed: " . $conn->connect_error);
   	}
   	echo "Connected successfully";	
}
//ESTE BLOQUE DE CODIGO SE EJECUTA PARA EMPEZAR DE NUEVO
if (isset($debug) && $debug ==1) {
	$sql_drpdb ="DROP DATABASE IF EXISTS BDproyec";
	echo $sql_dropdb"<br/>";
	if ($conn->query($sql_dropdb) === TRUE){
   		echo "base de datos $dbname eliminada con exito";
   	}else{
   		echo "DROP DATABASE sentence failed: " . $conn->error;
   	}
   	$sql_dropdb = "DROP TABLE IF EXISTIS $dbtable";
   	if($conn->query($sql_dropdb) === TRUE){
   		echo "tabla de datos $dbtable eliminada con exito";
   	}else{
   		echo "DROP TABLE sentence failed " . $conn->error;
   	}
}
//Create database
$sql = "CREATE DATABASE $dbname DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci";
$result = $conn->query($sql);
if (isset($debug) && $debug == 1) {
	if ($result === TRUE){
		echo "Database created successfully";
	} else{
		echo "Error creating database: " . $conn->error;
	}	
}
//Esto equivale en mysql en linea de comando use mydb
$conn->select_db($dbname);
//sql to create table
$sql = "CREATE TABLE $dbtable(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	contrasena VARCHAR(255) NOT NULL,
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	) ENGINE= InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci";

$result = $conn->query($sql);

if (isset($debug) && $debug ==1) {
	if ($result === TRUE){
			echo "Table products_list created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}	
}
$sql_insert = "INSERT INTO $dbtable VALUE('Patri', 'Parra', '1', 'psparra@gmail.com')";
$result = $conn->query($sql_insert);
$lastid =$conn->insert_id;
if(isset($debug) && $debug == 1){
	if($result === TRUE){
		echo "El ultimo registro insertado es: $lastid";
	}else{
		echo "Error inserting record " . $conn->error;
	}
}
$sql_insert = "";
$sql_insert .= "INSERT INTO $dbtable VALUE('Clara', 'Parras', '2', 'psa@gmail.com')";
$sql_insert .= "INSERT INTO $dbtable VALUE('Sofía', 'Rojas', '3', 'psrra@gmail.com')";
$sql_insert .= "INSERT INTO $dbtable VALUE('Milagrosa', 'Dominguez', '4', 'parra@gmail.com')";
$result = $conn->multi_query($sql_insert);
$lastid = $conn->$insert_id;
if(isset($debug) && $debug == 1){
	if($result === TRUE){
		echo "El ultimo registro insertado es: $lastid";
	}else{
		echo "Error inserting record " . $conn->error;
	}
}
$conn->close();
?>