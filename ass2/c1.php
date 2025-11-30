<?php

$students = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo "Original Array:\n";
print_r($students);

// a) Ascending order sort by Value
asort($students);
echo "\na) Ascending order by VALUE:\n";
print_r($students);

// b) Ascending order sort by Key
ksort($students);
echo "\nb) Ascending order by KEY:\n";
print_r($students);

// c) Descending order sort by Value
arsort($students);
echo "\nc) Descending order by VALUE:\n";
print_r($students);

// d) Descending order sort by Key
krsort($students);
echo "\nd) Descending order by KEY:\n";
print_r($students);

?>
