<?php

// PostgreSQL Connection
$conn = pg_connect("host=localhost dbname=hospital_db user=postgres password=yourpassword");

if(!$conn){
    die("Connection Failed");
}

?>

<form method="post">
    <label><b>Enter Hospital Name:</b></label>
    <input type="text" name="hname" required>
    <input type="submit" name="search" value="Show Doctors">
</form>

<?php

if(isset($_POST['search'])){
    $hname = $_POST['hname'];

    $query = "
        SELECT d.doc_no, d.dname, d.city, d.area, h.hname
        FROM Doctor d 
        JOIN Hospital h ON d.hosp_no = h.hosp_no
        WHERE h.hname ILIKE '%$hname%'";

    $result = pg_query($conn, $query);

    if(pg_num_rows($result) > 0){
        echo "<h3>Doctors Visiting: $hname </h3>";
        echo "<table border='1' cellpadding='8'>
                <tr>
                    <th>Doctor No</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Area</th>
                    <th>Hospital</th>
                </tr>";

        while($row = pg_fetch_assoc($result)){
            echo "<tr>
                    <td>{$row['doc_no']}</td>
                    <td>{$row['dname']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['area']}</td>
                    <td>{$row['hname']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No Doctors Found for hospital <b>$hname</b>";
    }
}

?>
