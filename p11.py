11. Write a PHP script to implement constructor and destructor.
<?php
class MyClass {
// Constructor
public function __construct() {
echo "Constructor called. Object created.<br>";
}
// Destructor
public function __destruct() {
echo "Destructor called. Object destroyed.<br>";
}
// Method
public function someMethod() {
echo "Some method called.<br>";
}
}
// Create an object of MyClass
$obj = new MyClass();
// Call a method of MyClass
$obj->someMethod();
// Object will be destroyed automatically when it goes out of scope or unset
?>