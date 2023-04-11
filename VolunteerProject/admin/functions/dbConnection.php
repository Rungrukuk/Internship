<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbName = "test";


$conn = mysqli_connect($servername, $username, $password,$dbName);

if (!$conn) {
  die("Bağlantı uğursuzdur: " . mysqli_connect_error());
}
?>