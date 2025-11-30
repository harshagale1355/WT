<?php
while(true){
    echo "\n--- File Operations Menu ---\n";
    echo "1. Display file type\n";
    echo "2. Delete a file\n";
    echo "3. Exit\n";
    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));

    switch($choice){
        case 1:
            echo "Enter filename: ";
            $filename = trim(fgets(STDIN));

            if(file_exists($filename)){
                $filetype = filetype($filename);
                echo "File type of '$filename' is: $filetype\n";
            } else {
                echo "File does not exist.\n";
            }
            break;

        case 2:
            echo "Enter filename to delete: ";
            $filename = trim(fgets(STDIN));

            if(file_exists($filename)){
                unlink($filename);
                echo "File '$filename' deleted successfully.\n";
            } else {
                echo "File does not exist.\n";
            }
            break;

        case 3:
            echo "Exiting program...\n";
            exit;

        default:
            echo "Invalid choice! Try again.\n";
    }
}
?>
