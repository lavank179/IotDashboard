<?php
    ob_start();
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }


    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dp";

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ("Database connection not established.");
?>