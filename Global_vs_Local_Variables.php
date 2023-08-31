<?php
echo "Welcome to scope and local/global vars in php<br>";
$a = 98; // Global Variable  // Global variables are declared outside the functions and are available to direct access globally.
$b = 9;  // Global Variable

function printValue(){
    // local variables cannot be accessed outside the function.
    // $a = 97; // Local Variable

    // PHP provides a function “global” to access the global variables inside the function.
    global $a, $b; // Give me the access to this global variable
    $a = 100;
    $b = 1000;
    echo "<br>The value of your variable a is $a and b is $b";
}

echo $a; 
printValue();
echo "<br>The value of your variable a is $a and b is $b";  // a = 100 & b = 1000 , because we have changed the values of global varibales in the function.
echo "<br>";

// echo var_dump($GLOBALS); 
echo var_dump($GLOBALS["a"]); 
echo var_dump($GLOBALS["b"]);

?>
