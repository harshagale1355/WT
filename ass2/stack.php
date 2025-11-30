<?php

$stack = array();  // empty stack

while(true){

    echo "\n===== STACK MENU =====\n";
    echo "1. Push (Insert)\n";
    echo "2. Pop (Delete)\n";
    echo "3. Display Stack\n";
    echo "4. Exit\n";
    echo "Enter your choice: ";
    
    $choice = trim(fgets(STDIN)); // input from user

    switch($choice){

        // a) Insert element
        case 1:
            echo "Enter value to push: ";
            $val = trim(fgets(STDIN));
            array_push($stack, $val);
            echo "Inserted: $val\n";
            break;

        // b) Delete element
        case 2:
            if(empty($stack)){
                echo "Stack is empty! Nothing to pop.\n";
            } else {
                $removed = array_pop($stack);
                echo "Popped element: $removed\n";
            }
            break;

        // Display stack
        case 3:
            echo "Current Stack:\n";
            print_r($stack);
            break;

        case 4:
            echo "Exiting...\n";
            exit;

        default:
            echo "Invalid choice! Try again.\n";
    }
}

?>
