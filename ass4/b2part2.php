<?php
// Saving user preferences in cookies (expire in 30 days)
setcookie("font_family", $_POST['font_family'], time()+86400*30);
setcookie("font_size", $_POST['font_size'], time()+86400*30);
setcookie("font_color", $_POST['font_color'], time()+86400*30);
setcookie("bg_color", $_POST['bg_color'], time()+86400*30);
?>

<!DOCTYPE html>
<html>
<body>

<h2>Preferences Saved!</h2>
<p><a href="b2part3.php">Click here to view page with your new settings</a></p>

</body>
</html>
