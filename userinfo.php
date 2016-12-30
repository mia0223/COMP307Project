<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$ID = $_SESSION['usersession'];
$sql = "SELECT * FROM info WHERE username='$ID' limit 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$address = $row["address"];
$phone = $row["phone"];
$postcode = $row["postcode"];
$email = $row['email'];
?>