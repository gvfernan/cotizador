<?php
$servername = "localhost";
$database = "cortinas";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falló la conexión " . mysqli_connect_error());
}
echo "<div class=conexion>Te conectaste!</div>";

?>