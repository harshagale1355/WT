<?php
session_start();
?>

<form method="post" action="b1part2.php">
    <h2>Enter Employee Details</h2>
    Employee No: <input type="text" name="eno" required><br><br>
    Employee Name: <input type="text" name="ename" required><br><br>
    Address: <input type="text" name="address" required><br><br>
    <input type="submit" value="Next">
</form>

<?php
// Store data in session
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $_SESSION['eno'] = $_POST['eno'];
    $_SESSION['ename'] = $_POST['ename'];
    $_SESSION['address'] = $_POST['address'];
}
?>
