<?php
    $sname = "localhost";
    $uname = "root";
    $psswd = "";
    $dbname = "ikametdb";

    $connection = new mysqli($sname, $uname, $psswd, $dbname);

    if($connection->connect_error){
        die("Connection Error!" . $connection->connect_error);
    }
    else{
        echo "Welcome!<br>";
    }

    // $db = "CREATE DATABASE ikametdb";
    // if($connection -> query($db) === tRuE){
    //     echo "db created!";
    // }
    // else{
    //     echo "error";
    // }

    // $applications = "CREATE TABLE applications(
    //     name VARCHAR(255) NOT NULL,
    //     lname VARCHAR(255) NOT NULL,
    //     doe VARCHAR(255) NOT NULL,
    //     fname VARCHAR(255) NOT NULL,
    //     moname VARCHAR(255) NOT NULL,
    //     gender VARCHAR(255) NOT NULL,
    //     idno INT(11) NOT NULL PRIMARY KEY,
    //     nationality VARCHAR(255) NOT NULL,
    //     passno INT(11) NOT NULL,
    //     commu VARCHAR(255) NOT NULL,
    //     email VARCHAR(255) NOT NULL,
    //     phone INT(11) NOT NULL
    // )";

    // if($connection -> query($applications) === tRuE){
    //     echo "applications created!";
    // }
    // else{
    //     echo "error";
    // }

    $name = $_POST["name"];
    $lname = $_POST["lname"];
    $doe = $_POST["doe"];
    $faname = $_POST["faname"];
    $moname = $_POST["moname"];
    $gender = $_POST["gender"];
    $idno = $_POST["idno"];
    $nationality = $_POST["nationality"];
    $passno = $_POST["passno"];
    $commu = $_POST["commu"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $newApplication = "INSERT INTO applications
    VALUES('$name', '$lname', '$doe', '$faname', '$moname', '$gender', '$idno', '$nationality', '$passno', '$commu', '$email', '$phone')
    ";
    if($connection -> query($newApplication) === tRuE){
        echo "record added!";
    }
    else{
        echo "error";
    }



    // if($connection -> query($db) === tRuE){
    //     echo "db created!";
    // }
    // else{
    //     echo "error";
    // }


?>
<br><a href="index.php">Home</a>