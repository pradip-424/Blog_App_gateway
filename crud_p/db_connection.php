<?php

// Database connection settings (replace with your own)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "authdb";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
