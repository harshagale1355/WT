<?php

$conn = pg_connect("host=localhost dbname=student_db user=postgres password=yourpassword");

if(!$conn){
    die("Connection Failed");
}

?>

<form method="post">
    Enter Competition Name:
    <input type="text" name="cname" required>
    <input type="submit" name="search" value="Search">
</form>

<?php
if(isset($_POST['search'])){
    $cname = $_POST['cname'];

    // SIMPLE QUERY
    $query = "
    SELECT Student.name, Student.class, Competition.c_name, Student_Competition.rank
    FROM Student, Competition, Student_Competition
    WHERE Student.stud_id = Student_Competition.stud_id
    AND Competition.c_no = Student_Competition.c_no
    AND Competition.c_name ILIKE '%$cname%'
    AND Student_Competition.rank = 1
    ";

    $result = pg_query($conn, $query);

    if(pg_num_rows($result) > 0){
        echo "<h3>Student With 1st Rank in $cname</h3>";
        echo "<table border='1' cellpadding='8'>
                <tr>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Competition</th>
                    <th>Rank</th>
                </tr>";

        while($row = pg_fetch_assoc($result)){
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['class']}</td>
                    <td>{$row['c_name']}</td>
                    <td>{$row['rank']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No student found with 1st rank for <b>$cname</b>";
    }
}
?>
