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
$ID = $_GET["productID"];
//$ID = $productID;
$sql = "SELECT * FROM product WHERE productID='$ID' limit 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$time = $row["time"];
$Status = $row["status"];
$SellerID = $row["userName"];
$detail = $row["detail"];
$price = $row["price"];
$address = $row["address"];
$img = $row["image"];
$contact = $row["contact"];
$detail = $row["detail"];
$productName = $row["productName"];
$postcode = $row["postcode"];
?>