<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jetoff_space";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

session_start();
?>