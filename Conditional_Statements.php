/*
Conditional Statements (If-else)
PHP if-else statement is used for decision making. 
This means you can create conditions in the form of expressions that evaluates to either true or false and based on these results, you can perform specific actions. 
There are various ways to use if statements in PHP.

if
if-else
if-else-if
*/

<?php
    $age = 6;
    if($age>18){
        echo "You can go to the party";
    }
    else if($age==7){
        echo "You are 7 years old";
    }
    else if($age==6){
        echo "You are 6 years old";
    }
    else{
        echo "You can not go to the party";
    }
?>


// Switch Statements.

<?php

$age = 56;

switch($age){
    case 12:
        echo "You are 12 years old <br>";
        break;

    case 45:
        echo "You are 45 years old <br>";
        break;

    case 56:
        echo "You are 56 years old boy <br>";
        break;
    
    default:
        echo "Your age is weird <br>";
        break;

    }
?>
