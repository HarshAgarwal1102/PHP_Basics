<?php

// What is a session?
// Used to manage information across difference pages (Used to store sensitive Information).

// Verify the user login info then 
session_start();    // session is started. 
$_SESSION['username'] = "Harsh";
$_SESSION['favCat'] = "Phones";
echo "We have saved your session";

?>
