<?php
$servername = "localhost";
$username = "root";  // Default XAMPP username
$password = "";  // Leave blank for XAMPP
$dbname = "online_learning";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>