<?php
session_start();

// Retrieve data from session
$eno = $_SESSION['eno'] ?? '';
$ename = $_SESSION['ename'] ?? '';
$address = $_SESSION['address'] ?? '';
$basic = $_SESSION['basic'] ?? 0;
$da = $_SESSION['da'] ?? 0;
$hra = $_SESSION['hra'] ?? 0;

// Calculate total
$total = $basic + $da + $hra;
?>

<h2>Employee Information</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>ENO</th>
        <th>Name</th>
        <th>Address</th>
        <th>BASIC</th>
        <th>DA</th>
        <th>HRA</th>
        <th>TOTAL</th>
    </tr>
    <tr>
        <td><?php echo $eno; ?></td>
        <td><?php echo $ename; ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $basic; ?></td>
        <td><?php echo $da; ?></td>
        <td><?php echo $hra; ?></td>
        <td><?php echo $total; ?></td>
    </tr>
</table>
