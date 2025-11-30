<?php
// Cookie name
$cookie_name = "visit_count";

// Check if cookie exists
if(isset($_COOKIE[$cookie_name])){
    // Increase visit count
    $visit_count = $_COOKIE[$cookie_name] + 1;
} else {
    // First visit
    $visit_count = 1;
}

// Set/update the cookie (expires in 30 days)
setcookie($cookie_name, $visit_count, time() + (30*24*60*60)); 

echo "<h2>You have visited this page <b>$visit_count</b> times using cookies.</h2>";
?>
