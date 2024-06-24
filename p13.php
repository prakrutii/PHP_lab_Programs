13. Write a PHP script to implement form handling using the post method.
POST is used to send data to a server to create/update a resource.
The data sent to the server with POST is stored in the request body of the HTTP request:
POST /test/demo_form.php HTTP/1.1
<?php
error_reporting(0);
if( $_POST["name"] && $_POST["weight"] )
{
if (preg_match("/[^A-Za-z'-]/"
,$_POST['name'] ))
{
die ("invalid name and name should be alpha");
}
echo "Welcome ". $_POST['name']. "<br />";
echo "You are ". $_POST['weight']. " kgs in weight.";
exit();
}
?>
<html>
<body>
<form action = "<?php $_PHP_SELF ?>" method = "POST">
Name: <input type = "text" name = "name" required/>
Weight: <input type = "text" name = "weight" required/>
<input type = "submit" />
</form>
</body>
</html>