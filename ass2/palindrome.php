<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Check</title>
</head>
<body>

<form method="POST">
    Enter a string: 
    <input type="text" name="str" required>
    <input type="submit" value="Check">
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $string = $_POST['str'];
    $rev = strrev($string);  // built-in function to reverse string

    if(strtolower($string) == strtolower($rev)){
        echo "<h3>✔ '$string' is a Palindrome.</h3>";
    } else{
        echo "<h3>✘ '$string' is NOT a Palindrome.</h3>";
    }
}

?>

</body>
</html>
