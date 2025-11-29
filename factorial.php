<?php
$number = $_POST['num'];

function factorial_number($number){
    $fact=1;
    for($i=1;$i<=$number;$i++){
        $fact=$fact*$i;
    }
    return $fact;
}

echo "result";
echo "The factorial of number ". $number . " is ".factorial_number($number);



?>