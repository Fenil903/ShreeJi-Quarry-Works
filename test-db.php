<?php
$servername = "localhost";
$username = "u746678681_shivshakti";
$password = "Shivshakti@#123";
$database = "u746678681_shivshakti";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";