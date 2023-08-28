/*
              Data types 
Data type is the classification of data into a category.
  
Alphanumeric characters are classified as STRINGS
Whole numbers are classified as INTEGERS
Numbers with decimal points are classified as FLOAT
True or false values are classified as BOOLEAN
A collection of similar types of elements are called ARRAY
An object is a specific instance of a class that serves as a templates for OBJECTS

As told earlier, PHP determines the data types by analyzing the values of the data supplied.
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
    <?php
        define('PI', 3.14);    // defining a PHP constant
        $radius = 15;
        $area = PI * $radius * $radius;
        echo $area;
    ?>
    </div>
</body>
</html>
