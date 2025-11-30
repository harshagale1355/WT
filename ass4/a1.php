<?php
// Start the session
session_start();

// Check if the session variable exists
if(isset($_SESSION['visit_count'])){
    $_SESSION['visit_count']++;  // increment count
} else {
    $_SESSION['visit_count'] = 1;  // first visit
}

// Display number of visits for this user
echo "<h2>You have visited this page <b>".$_SESSION['visit_count']."</b> times in this session.</h2>";
?>
