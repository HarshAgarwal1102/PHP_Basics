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

/*
PHP Comparison Operators

operator         Name                  Example         Result
   ==         identical                $x == $y      True if $x is  equal to $y,
   <          Less than                $x < $y       True if $x is less than $y
   >         Greater than              $x > $y       True if $x is greater than $y
   >=    Greater than or equal to      $x >= $y   True if $x is greater than or equal to $y
   <=      Less than or equal to       $x <= $y     True if $x is less than or equal to $y
*/

   // Comparison Operators
    // echo "<h1> Comparison Operators </h1>";
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";

/*
PHP Incrementing and Decrementing Operators
 
Pre-increment (++i) − Before assigning the value to the variable, the value is incremented by one.
Post-increment (i++) − After assigning the value to the variable, the value is incremented.

Operator         Name         Effect
 ++$x      Pre-increment      Increments $x by one, then returns $x
 $x++      Post-increment     Returns $x, then increments $x by one
 --$x      Pre-decrement      Decrements $x by one, then returns $x
 $x--      Post-decrement     Returns $x, then decrements $x by one
*/

   // Increment/Decrement Operators 
    // echo $variable1++;
    // echo $variable1--;
    // echo ++$variable1;
    echo --$variable1;
    echo "<br>";
    echo $variable1;


/*
PHP Logical Operators

Operator         Name         Example         Result
  And            And         $x and $y         True if both $x and $y are true
   Or            Or          $x or $y          True if either $x or $y is true
  Xor            Xor         $x xor $y         True if either $x or $y is true, but not both
  &&             And         $x && $y          True if both $x and $y are true
  ||             Or          $x || $y          True if either $x or $y is true
   !            Not            !$x             True if $x is not true
*/


   // Logical Operator

    // and (&&)
    // or (||)
    // xor 
    // !

    // $myVar = (true and true);
    // $myVar = (false and true);
    // $myVar = (false and false);
    // $myVar = (true and false);
    // $myVar = (true or false);

    // $myVar = (true xor true);
    // $myVar = (false and true);
    // $myVar = (false xor false);
    $myVar = (true and false);
    echo "<br>";
    echo var_dump($myVar);

?>
