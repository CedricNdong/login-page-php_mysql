<?php
$servername = "localhost";
$myUsername = "root";
$password = "";
$dbname = "db_login_php_mysq";

// Create connection
$con = mysqli_connect($servername, $myUsername, $password,$dbname);

// Check connection
if (!$con) {
  die("Verbindung failed: " . mysqli_connect_error());
}
echo "\nErfolgreich verbunden &#x2705;";
?>
