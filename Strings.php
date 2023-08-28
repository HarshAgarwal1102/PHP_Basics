<?php
    $str = "This this this";
    echo $str. "<br>";
    $lenn = strlen($str);    // inbuilt function to calculate the length of the string
    echo "The length of this string is ". $lenn . ". Thank you <br>";    
    echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";  // inbuilt function to count the number of words in the string.
    echo "The reversed string is ". strrev($str) . ". Thank you <br>";  // inbuilt function to reverse the string
    echo "The search for is in this string is ". strpos($str, "is") . ". Thank you <br>";  // inbuilt function to find the starting index of the provided letters in the string
    echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";  // inbuilt function to replace the present word with the provided in the string
?>
