5. Write a PHP script to find the factorial of a number.
<?php
// Define the number
$number = 5; // Change this to calculate factorial of a different number
// Initialize factorial to 1
$factorial = 1;
// Calculate factorial using a loop
for ($i = 1; $i <= $number; $i++) {
$factorial *= $i;
}
// Output the factorial
echo "The factorial of $number is: $factorial";
?>