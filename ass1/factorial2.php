<?php

// Reading number from user
echo "Enter a number: ";
$number = intval(trim(fgets(STDIN))); // input from keyboard

// Function for factorial
function factorial($n){
    $fact = 1;
    for($i = 1; $i <= $n; $i++){
        $fact = $fact * $i;
    }
    return $fact;
}

// Output
echo "Factorial of $number is: " . factorial($number) . "\n";

?>
