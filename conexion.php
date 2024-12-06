<?php 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error){
    die("Conexion Fallida: " . $conn->connect_error);
}
echo "Conexion Correcta, con MYSQL orientado a Objectos </br>";

?>

<?php 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (!$conn){
    die("Conexion Fallida: " . mysqli_connect_error());
}
echo "Conexion Correcta, con MYSQL orientado a Procedimientos </br>";

?>

<?php 
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=prueba", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion Correcta, con PDO orientado a Objectos, extendion de PHP </br>";
} catch(PDOException $e){
    echo "Conexion Fallida, con PDO orientado a Objectos, extendion de PHP </br>";
}
?>