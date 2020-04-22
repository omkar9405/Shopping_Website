<?php

$servername = "localhost";
$username = "id12951237_omkar";
$password = "omkar@123";
$db = "id12951237_bhidestore";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>