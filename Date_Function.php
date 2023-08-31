<?php

// d	Day of the month, 2 digits with leading zeros	01 to 31
// j	Day of the month without leading zeros	1 to 31
// S	English ordinal suffix for the day of the month, 2 characters	st, nd, rd or th. Works well with j
// F	A full textual representation of a month, such as January or March	January through December
// Y	A full numeric representation of a year, at least 4 digits, with - for years BCE.	Examples: -0055, 0787, 1999, 2003, 10191

echo "Welcome to the world of dates<br>";
// $d = date("dS F Y");
$d = date("dS F Y, g:i A");
echo "Todays date is $d <br>";

// Prints something like: Thursday 31th of August 2023 08:31:46 PM
echo date('l jS \of F Y h:i:s A');

$year = date("Y");
echo "<br>";
echo "Copyright $year | All rights reserved <br>";

?>
