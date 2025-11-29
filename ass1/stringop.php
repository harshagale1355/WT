<?php

$string = $_POST['str'];
$lower = strtolower($string); // converting to lower case for vowel counting

// (a) Function to find string length without using strlen()
function stringLength($str){
    $count = 0;
    // Counting characters one by one
    while(isset($str[$count])){
        $count++;
    }
    return $count;
}

// (b) Function to count total number of vowels
function vowelCount($str){
    $vowels = ['a','e','i','o','u'];
    $count = 0;

    for($i=0; isset($str[$i]); $i++){
        if(in_array($str[$i], $vowels)){
            $count++;
        }
    }
    return $count;
}

// Output
echo "<h2>Results</h2>";
echo "String Entered: $string <br><br>";
echo "Length of String: " . stringLength($string) . "<br>";
echo "Total Vowels: " . vowelCount($lower) . "<br>";

?>
