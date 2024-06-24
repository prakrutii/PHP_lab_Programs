3. Write a PHP script to find a maximum of three numbers.
<?php
// Define the three numbers
$number1 = 10;
$number2 = 25;
$number3 = 15;
// Find the maximum among the three numbers using if-else conditions
if ($number1 >= $number2 && $number1 >= $number3) {
$maxNumber = $number1;
}
elseif ($number2 >= $number1 && $number2 >= $number3) {
$maxNumber = $number2;
} else {
$maxNumber = $number3;
}