<?php

// Step 1: Declare a Multidimensional Array
$students = array(
    array("Name" => "Harsh",  "Age" => 19, "City" => "Pune"),
    array("Name" => "Amit",   "Age" => 20, "City" => "Mumbai"),
    array("Name" => "Sagar",  "Age" => 18, "City" => "Delhi")
);

echo "=== Original Multidimensional Array ===\n";
print_r($students);

// Step 2: Display specific element
echo "\nSpecific Element:\n";
echo "Student 2 City: " . $students[1]["City"] . "\n";   // Accessing a specific value

// Step 3: Delete a given element
unset($students[0]["City"]);  // deleting city of first student

echo "\n=== Array After Deleting Specific Element ===\n";
print_r($students);

?>
