4. Write a PHP script to swap two numbers.
<?php
// Define the two numbers
$number1 = 10;
$number2 = 20;
// Before swapping
echo "Before swapping: ";
echo "Number 1 = $number1, Number 2 = $number2 <br>"; // Swap the numbers
$temp = $number1;
$number1 = $number2;
$number2 = $temp;
// After swapping
echo "After swapping: ";
echo "Number 1 = $number1, Number 2 = $number2";
?>