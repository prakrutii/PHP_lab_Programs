19. Write a PHP script to create table.
<?php
// Database configuration
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "php"; // Change this to your database name
// Create connection
$conn = new mysqli($servername, $username, $password, $database); // Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE
CURRENT_TIMESTAMP )";
// Execute SQL query
if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
// Close connection
$conn->close();
?>