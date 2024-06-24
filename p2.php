2. Write a PHP script to find odd or even numbers from a given number.
<?php
// Define the number to check
$number = 15;
// Check if the number is odd or even
if ($number % 2 == 0) {
echo "{$number} is an even number.";
} else {
echo "{$number} is an odd number.";
}
?>