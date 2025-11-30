<?php
// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $gender = $_POST['gender'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Self Processing Form</title>
</head>
<body>

<h2>Self-Processing Form Example</h2>

<form method="post" action="">
    Name: <input type="text" name="name" required><br><br>

    Email: <input type="email" name="email" required><br><br>

    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female" required> Female
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
// Display after submission
if (!empty($name)) {
    echo "<h3>Submitted Information:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Gender: $gender <br>";
}
?>

</body>
</html>
