<?php
$servername = "localhost";
$username = "waioin";
$password = "waioakshaydebo";
$dbname = "waioin_aks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$user=$_POST["usern"];
$pass=$_POST["pass"];
$name=$_POST["name"];
$sql = "INSERT INTO users VALUES ('".$name."','".$user."', '".$pass."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
