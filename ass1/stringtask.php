<?php

$large = $_POST['large'];
$small = $_POST['small'];
$replace = $_POST['replace'];

// Check if smaller string appears at the start of the larger string
function checkStart($large, $small){
    return (substr($large, 0, strlen($small)) === $small);
}

// Replace all occurrences of small string
function replaceString($large, $small, $replace){
    return str_replace($small, $replace, $large);
}

echo "<h2>Results</h2>";
echo "Large String: $large<br>";
echo "Small String: $small<br><br>";

// Check condition
if(checkStart($large, $small)){
    echo "✔ The smaller string appears at the START of the larger string.<br><br>";
}else{
    echo "✘ The smaller string does NOT appear at the start of the larger string.<br><br>";
}

// Replace and display output
echo "<b>After Replacement:</b><br>";
echo replaceString($large, $small, $replace);

?>
