<?php

$string = $_POST['str'];

// a. Function to convert string to lowercase and then Title Case
function convertCase($str){
    $lower = strtolower($str);       // lowercase
    $title = ucwords($lower);        // convert to Title Case
    return $title;
}

// b. Function to find reverse of string using built-in function
function reverseString($str){
    return strrev($str);
}

// Output
echo "<h2>Results</h2>";
echo "Original String: $string <br><br>";
echo "Lowercase → Title Case: " . convertCase($string) . "<br>";
echo "Reversed String: " . reverseString($string) . "<br>";

?>
