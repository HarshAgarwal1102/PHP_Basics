<?php
    $str = "This this this";
    echo $str. "<br>";
    $lenn = strlen($str);    // inbuilt function to calculate the length of the string
    echo "The length of this string is ". $lenn . ". Thank you <br>";    
    echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";  // inbuilt function to count the number of words in the string.
    echo "The reversed string is ". strrev($str) . ". Thank you <br>";  // inbuilt function to reverse the string
    echo "The search for is in this string is ". strpos($str, "is") . ". Thank you <br>";  // inbuilt function to find the starting index of the provided letters in the string
    echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";  // inbuilt function to replace the present word with the provided in the string
    
    $name = "Rohan is a good boy";
    echo str_repeat($name, 4);
    echo "<br>";
    echo "<pre>";
    echo rtrim("    this is a good boy     ");
    echo "<br>";
    echo ltrim("    this is a good boy     ");
    echo "</pre>";
?>


/*

1)Strlen(): This function returns the length of the string, taking string as the parameter.

2)str_word_count(): This function returns the number of words in the string, taking string as the parameter.

3)strrev(): This function returns the reverse of a string, taking string as the parameter.

4)strpos(): The strpos() function finds the position of the first occurrence of a string inside another string. 

One important part to keep in mind is, The PHP concatenation operator (.) is used to combine two string values to create one string.

*/
