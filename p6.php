6. Write a PHP script to check whether a given number is palindrome or not.
<?php
function palindrome($n)
{
$number = $n;
$sum = 0;
while (floor($number)) {
$rem = $number % 10;
$sum = $sum * 10 + $rem;
$number = floor($number / 10);
}
return $sum;
}
$n=readline('Enter a num1:');
$num = palindrome($input);
if ($input == $num) {
echo "$input is a Palindrome number";
} else {
echo "$input is not a Palindrome";
}
?>