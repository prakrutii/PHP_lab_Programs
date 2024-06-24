8. Write a PHP script to generate a Fibonacci series using the Recursive function.
<?php
/* Print Fibonacci series up to 12 elements. */
$num = 12;
echo "<h3>Fibonacci series using recursive function:</h3>"; echo "\n";
/* Recursive function for Fibonacci series. */
function series($num){
if($num == 0){
return 0;
} elseif ($num == 1) {
return 1;
} else {
return (series($num - 1) + series($num - 2));
}
}
/* Call Function. */
for ($i = 0; $i < $num; $i++) {
echo series($i) . " "; // Separate numbers with space
}
?>