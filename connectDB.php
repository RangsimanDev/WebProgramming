<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="projectweb";

    //Connect Database
    $conn = mysqli_connect("$servername","$username","$password","$dbname");

    //Chack Connection
    if (mysqli_connect_error()) {
        echo "Connected Failed!!:" . mysqli_connect_error();
        exit();
    } else {
        //echo "Connected Successfury!!";
    }
?>