<?php
$arr = array("harsh"=>"CS",
"himanshu"=>"Commerce",
"prem"=>"BCA");

echo "Enter the choice\n";
echo "Enter 1: Reverse the array\n";
echo "Enter 2: Suffle the array\n";
echo "Enter 3: Exit\n";

$choice = intval(trim(fgets(STDIN)));
switch($choice){
    case 1:
        $reverse = array_flip($arr);
        echo "reverse array\n";
        print_r($reverse);
        break;
    case 2:
        $key=array_keys($arr);
        shuffle($key);
        foreach($key as $k){
            echo "$k => $arr[$k]\n";
        }
        break;
    case 3:
        echo "Exiting program...\n";
        break;
}while(true);
?>