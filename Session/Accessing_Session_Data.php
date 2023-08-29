<?php

// Start the session and get the data
session_start();
if(isset($_SESSION['username'])){       // this is used so that no error message will be displayed on the web page after session logged out.
    echo "Welcome ". $_SESSION['username'];    // accessing session data...
    echo "<br> Your favorite category is ". $_SESSION['favCat'];    // accessing session data...
    echo "<br>";
}
else{
    echo "Please login to continue";   // this message will be shown instead of error.
}

?>
