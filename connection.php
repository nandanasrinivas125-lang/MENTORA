<?php
$host = "localhost";   // Database host
$user = "root";        // Database username
$pass = "";            // Database password
$db   = "osp"; // Database name

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>




