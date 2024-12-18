<?php
$host = "localhost";
$user = "root";      // Database username
$pass = "";          // Database password
$dbname = "user_auth";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
