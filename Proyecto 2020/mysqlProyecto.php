<?php  
$servername = "localhost";
$username = "root";
$password = "admin";
$debug = $_GET["debug"];
$dbname = "BDproyec";
$dbtable = "Usuarios";

//Conectarse a mysql
$conn = new mysqli($servername, $username, $password);

//Comprobar la conexión a mysql
if (isset($debug) && $debug==1 ){

	if ($conn->connect_error) {

	    die("Connection failed: " . $conn->connect_error) . "<br>";
	}
	echo "Connected successfully<br>";
}
// prepare and bind
$stmt = $conn->prepare("INSERT INTO Usuarios (firstname, lastname, email, contrasena) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email, $contrasena);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$contrasena = "1111";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$contrasena = "2222";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$contrasena = "3333";
$stmt->execute();

echo "New records created successfully";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
// sql to delete a record
$sql = "DELETE FROM Usuarios WHERE email = 'mary@example.com'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$sql = "UPDATE Usuarios SET lastname='Trabolta' WHERE email = 'john@example.com'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$stmt->close();
$conn->close();
?>