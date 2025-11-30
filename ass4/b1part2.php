<?php
session_start();
?>

<form method="post" action="b1part3.php">
    <h2>Enter Employee Earnings</h2>
    Basic Salary: <input type="number" name="basic" required><br><br>
    DA: <input type="number" name="da" required><br><br>
    HRA: <input type="number" name="hra" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php
// Store earnings in session if form submitted
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $_SESSION['basic'] = $_POST['basic'];
    $_SESSION['da'] = $_POST['da'];
    $_SESSION['hra'] = $_POST['hra'];
}
?>
