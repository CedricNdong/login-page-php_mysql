<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "db_login_php_mysq";

// Create connection
$con = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>