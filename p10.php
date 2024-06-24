10. Write a PHP program to insert new items in an array on any position in PHP.
<?php
// Define an indexed array $original with elements '1'
,
'2'
,
'3'
,
'4'
,
'5'
$original = array( '1'
,
'2'
,
'3'
,
'5' );
// Output a message indicating the original array
echo 'Original array :';
// Iterate through the elements of the original array and echo them
foreach ($original as $x) {
echo "$x ";
}
echo "<br>";
// Define a string '$' to be inserted into the array
$inserted = 4;
// Use array_splice() to insert the value '$' at index 3 in the original array
array_splice($original, 3, 1,$inserted);
// Output a message indicating the array after the insertion
echo " After inserting '4' the array is : ";
// Iterate through the modified array and echo its elements
foreach ($original as $x) {
echo "$x ";
}
?>