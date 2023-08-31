<?php

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
