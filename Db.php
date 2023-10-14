<?php

$servername = "localhost";

$username = "root"; // user  name for the server

$password = ""; // password for the server

$db = "Jodhana";

$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());

}

?>