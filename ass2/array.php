<?php

// Associative Array
$student = array(
    "Name" => "Harsh",
    "Course" => "Computer Science",
    "City" => "Pune",
    "Age" => 19
);

while(true){

    echo "\n===== MENU =====\n";
    echo "1. Display elements with keys\n";
    echo "2. Display size of array\n";
    echo "3. Exit\n";
    echo "Enter your choice: ";

    $choice = trim(fgets(STDIN));

    switch($choice){

        // a) Display all keys and values
        case 1:
            echo "\n--- Elements of Associative Array ---\n";
            foreach($student as $key => $value){
                echo "$key : $value\n";
            }
            break;

        // b) Find size of array
        case 2:
            echo "\nSize of Array = " . count($student) . "\n";
            break;

        case 3:
            echo "Exiting program...\n";
            exit;

        default:
            echo "Invalid input! Try again.\n";
    }
}

?>
