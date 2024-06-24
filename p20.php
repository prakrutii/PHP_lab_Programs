20. Develop a PHP program to design a college admission form using MYSQL database.
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>College
Admission Form</title>
</head>
<body>
<h2>College Admission Form</h2>
<form action="submit_form.php" method="POST">
<label for="fullname">Full Name:</label><br>
<input type="text" id="fullname" name="fullname" required><br><br> <label
for="email">Email:</label><br>
<input type="email" id="email" name="email" required><br><br>
<label for="phone">Phone:</label><br>
<input type="tel" id="phone" name="phone" required><br><br>
<label for="course">Select Course:</label><br>
<select id="course" name="course">
<option value="Computer Science">Computer Science</option>
<option value="Engineering">Engineering</option>
<option value="Medicine">Medicine</option>
<!-- Add more options as needed -->
</select><br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>
submit_form.php
<?php
// Database configuration
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "abhishek"; // Change this to your database name
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
// Prepare SQL statement
$sql = "INSERT INTO admission_forms (fullname, email, phone, course) VALUES
('$fullname'
,
'$email'
,
'$phone'
,
'$course')"; // Execute SQL query
if ($conn->query($sql) === TRUE) {
echo "Admission form submitted successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close connection
$conn->close();
?>