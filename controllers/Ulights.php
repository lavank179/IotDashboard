<?php

include('./db.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $Did = intval($_POST["id"]);
    $startT = date("Y-m-d H:m:s", $_POST["sTime"]);
    $endT = date("Y-m-d H:m:s", $_POST["eTime"]);

    if($Did == 16 || $Did == 17 || $Did == 18 || $Did == 19){
        $total = ($_POST["eTime"] - $_POST["sTime"]) * (60/3600);
        $query = "INSERT INTO lights (Did, startTime, endTime, total) VALUES ('". $Did ."', '". $startT ."', '". $endT ."', '". $total ."')";
    } elseif($Did == 25 || $Did == 26){
        $total = ($_POST["eTime"] - $_POST["sTime"]) * (80/3600);
        $query = "INSERT INTO fans (Did, startTime, endTime, total) VALUES ('". $Did ."', '". $startT ."', '". $endT ."', '". $total ."')";
    }

    if ( mysqli_query($conn, $query) === TRUE) {
        echo "New record created successfully";
    }
}
?>