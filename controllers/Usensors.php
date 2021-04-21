<?php
include('./db.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $humidity = floatval($_POST['humidity']);
    $temperature = floatval($_POST['temp']);
    $moisture = intval($_POST['moisture']);

    $query = "INSERT INTO sensors (humidity, temperature, moisture) VALUES ('". $humidity ."', '". $temperature ."', '". $moisture ."')";

    if ( mysqli_query($conn, $query) === TRUE) {
        echo "New record created successfully";
    }
}
?>