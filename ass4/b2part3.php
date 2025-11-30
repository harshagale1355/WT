<?php
// Fetching cookie values
$font_family = $_COOKIE['font_family'] ?? "Arial";
$font_size   = $_COOKIE['font_size'] ?? "16px";
$font_color  = $_COOKIE['font_color'] ?? "#000000";
$bg_color    = $_COOKIE['bg_color'] ?? "#ffffff";
?>

<!DOCTYPE html>
<html>
<body style="font-family:<?= $font_family ?>;
             font-size:<?= $font_size ?>;
             color:<?= $font_color ?>;
             background-color:<?= $bg_color ?>;">

<h1>Welcome to Your Custom Page!</h1>
<p>This page is displayed using your saved cookie preferences.</p>

</body>
</html>
