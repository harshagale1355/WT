<?php

echo "Enter filename: ";
$filename = trim(fgets(STDIN));

if(!file_exists($filename)){
    die("File does not exist.\n");
}

while(true){

    echo "\n===== MENU =====\n";
    echo "1. Display file type\n";
    echo "2. Display last access time\n";
    echo "3. Display size of file\n";
    echo "4. Delete file\n";
    echo "5. Exit\n";
    echo "Enter your choice: ";

    $ch = trim(fgets(STDIN));

    switch($ch){

        case 1:
            echo "File Type: ". filetype($filename) ."\n";
            break;

        case 2:
            echo "Last Access Time: ". date("d-m-Y H:i:s", fileatime($filename)) ."\n";
            break;

        case 3:
            echo "File Size: ". filesize($filename)." bytes\n";
            break;

        case 4:
            if(unlink($filename)){
                echo "File Deleted Successfully.\n";
                exit; // exit after deletion
            }else{
                echo "Error deleting file.\n";
            }
            break;

        case 5:
            echo "Exiting Program...\n";
            exit;

        default:
            echo "Invalid Option. Try again.\n";
    }
}

?>
