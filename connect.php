<?php
$servername = "localhost";
$user = "root";
$pass = "a290php";

// Create connection
$conn = new mysqli($servername, $user, $pass);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>