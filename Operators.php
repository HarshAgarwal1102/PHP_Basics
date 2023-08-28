<?php

/*
PHP Arithmetic Operators
Operator    Description     Example        Result
   +          Addition      $x + $y     Sum of $x and $y
   -        Subtraction     $x - $y  Difference of $x and $y.
   *       Multiplication   $x * $y   Product of $x and $y.
   /          Division      $x / $y   Quotient of $x and $y
*/

  // Arithmetic Operators 
    echo "<br>";
    echo "The value of varible1 + variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of varible1 - variable2 is ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of varible1 * variable2 is ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of varible1 / variable2 is ";
    echo $variable1 / $variable2;
    echo "<br>";


/*
PHP Assignment Operators
Operator        Description        Example       Result
  =               Assign           $x = $y      $x = $y
  +=          Add and assign       $x += $y    $x = $x + $y
  -=        Subtract and assign    $x -= $y    $x = $x - $y
  *=        Multiply and assign    $x *= $y    $x = $x * $y
  /=    Divide and assign quotient $x /= $y    $x = $x / $y
*/

  // Assignment Operators

    $variable1 = 100;
    $variable2 = $variable1;
    echo "the value of the variable is now";
    echo $variable2;
    echo "<br>";
    $variable2 += 10;
    echo "the value of the variable is now";
    echo $variable2;
    echo "<br>";
    $variable2 -= 10;
    echo "the value of the variable is now";
    echo $variable2;
    echo "<br>";
    $variable2 *= 10;
    echo "the value of the variable is now";
    echo $variable2;
    echo "<br>";
    $variable2 /= 10;
    echo "the value of the variable is now";
    echo $variable2;
    echo "<br>";

?>
