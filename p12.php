<?php
// Check if form data has been submitted
if (isset($_GET['name']) && isset($_GET['email'])) {
// Retrieve form data
$name = $_GET['name'];
$email = $_GET['email'];
// Display submitted data
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
}
?>