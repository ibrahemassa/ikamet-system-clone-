<?php
    $sname = "localhost";
    $uname = "root";
    $psswd = "";
    $dbname = "ikametdb";

    $connection = new mysqli($sname, $uname, $psswd, $dbname);
    $records = $connection -> query("SELECT * FROM applications");
    if($records -> num_rows > 0){
        echo "<div class='container'>";
        echo "<table class='table'>";
        echo "<thead><tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Gender</th>
                <th>ID Number</th>
                <th>Nationality</th>
                <th>Passport Number</th>
                <th>Communication</th>
                <th>Email</th>
                <th>Phone</th>
            </tr></thead>";
        
        echo "<tbody>";
        while ($row = $records->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['lname']}</td>
                    <td>{$row['doe']}</td>
                    <td>{$row['fname']}</td>
                    <td>{$row['moname']}</td>
                    <td>{$row['gender']}</td>
                    <td>{$row['idno']}</td>
                    <td>{$row['nationality']}</td>
                    <td>{$row['passno']}</td>
                    <td>{$row['commu']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                </tr>";
        }
        echo "</tbody></table></div>";
        }
        else{
            echo "No records!";
        }
        
?>

<link rel="stylesheet" href="./css/view.css">
