<?php

// Stop the session
session_start();
session_unset();   // remove data from variables.
session_destroy();   // remove variables.
echo "<br> You have been logged out";

?>
