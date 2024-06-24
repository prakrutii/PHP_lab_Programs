9. Write a PHP script to implement at least seven string functions.
<?php
// Sample string for demonstration
$string = "Hello, World!";
// 1. strlen(): Get the length of a string
$length = strlen($string);
echo "1. Length of the string: $length <br>";
// 2. strtoupper(): Convert a string to uppercase
$uppercaseString = strtoupper($string);
echo "2. Uppercase string: $uppercaseString <br>";
// 3. strtolower(): Convert a string to lowercase
$lowercaseString = strtolower($string);
echo "3. Lowercase string: $lowercaseString <br>";
// 4. substr(): Get a part of a string
$substring = substr($string, 0, 5); // Get first 5 characters
echo "4. Substring: $substring <br>";
// 5. str_replace(): Replace occurrences of a string
$newString = str_replace("World"
,
"PHP"
, $string);
echo "5. After replacement: $newString <br>";
// 6. strpos(): Find the position of the first occurrence of a substring
$position = strpos($string,
"World");
echo "6. Position of 'World': $position <br>";
// 7. strrev(): Reverse a string
$reversedString = strrev($string);
echo "7. Reversed string: $reversedString <br>";
?>