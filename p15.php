<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve string from form input
$input_string = $_POST['input_string'];
// Display the string
if (preg_match("/[^A-Za-z'-]/"
,$_POST['input_string'] ))
{
die ("invalid string and string should be alpha");
}
echo "You entered: " . $input_string;
}
?>