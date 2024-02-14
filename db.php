<?php
// db.php
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';

// Establish a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
