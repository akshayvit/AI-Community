<?php
$servername = "localhost";
$username = "waioin";
$password = "Akshay@123";
$dbname = "waioin_aks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>