<?php
$servername = "mysql";
$username = "dev";
$password = "dev";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully.";

// Change database to "test"
mysqli_select_db($conn,"information_schema");
echo "DB Selected.";
?>
