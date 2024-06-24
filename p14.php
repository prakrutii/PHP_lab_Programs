<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve number from form input
$number = $_POST['number'];
// Check if the number is prime
$is_prime = true;
if ($number <= 1) {
$is_prime = false;
} else {
for ($i = 2; $i <= $number/2; $i++) {
if ($number % $i == 0) {
$is_prime = false;
break;
}
}
}
// Display the result
if ($is_prime) {
echo "The number " . $number . " is prime.";
} else {
echo "The number " . $number . " is not prime.";
}
}
?>