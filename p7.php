7. Write a PHP script to reverse a given number and calculate its sum.
<?php
function sumrev($n)
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
$num = sumrev($n);
echo "the reversed num is $num\n";
$sum=0;
for($i=0;$i<strlen($n);$i++)
{
$sum+=$n[$i];
}
echo "the sum of reversed numis $sum";
?>