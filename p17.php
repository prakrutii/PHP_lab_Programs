17. PHP script to show the functionality of date and time function
// Set the default timezone
date_default_timezone_set('UTC');
// Get the current date and time
$current_datetime = date('Y-m-d H:i:s');
echo "Current date and time (UTC): " . $current_datetime . "<br>";
// Get the current date in a specific format
$current_date = date('Y-m-d');
echo "Current date: " . $current_date . "<br>";
// Get the current time in a specific format
$current_time = date('H:i:s');
echo "Current time: " . $current_time . "<br>";
// Get the current day of the week (0 for Sunday through 6 for Saturday)
$current_day_of_week = date("l");
echo "Today is " . $current_day_of_week . "<br>";
// Get the current month (1 for January through 12 for December)
$d=date("M");
echo "the current month is ".$d."<br>";
// Get the current year
$current_year = date('Y');
echo "Current year: " . $current_year . "<br>";
echo "<br>";
echo "<br>";
echo date('Y-M-D');
?>