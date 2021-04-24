<?php

include('../db.php');
if(isset($_POST['tempmoist'])){
  $table = array();
  $i = $j = 0;
    
    $query1 = "SELECT temperature AS temperature, timed AS etime FROM `sensors` limit 5";
    $result1 = mysqli_query($conn, $query1);
    while($row = mysqli_fetch_array($result1)){
      $d = date_create($row['etime']);
      $d = date_format($d,"Y-m-d") . " IST";
      $table[0][$i] = round(floatval($row['temperature']), 2);
      $table[1][$j] = $d;
      $i += 1;
      $j += 1;
    }

    $i = $j = 0;
    $query2 = "SELECT moisture AS moisture, timed AS etime FROM `sensors` limit 5";
    $result2 = mysqli_query($conn, $query2);
    while($row = mysqli_fetch_array($result2)){
      $d = date_create($row['etime']);
      $d = date_format($d,"Y-m-d") . " IST";
      $table[2][$i] = round(floatval($row['moisture']), 2);
      $table[3][$j] = $d;
      $i += 1;
      $j += 1;
    }
    $i = $j = 0;
    $jsonTable = json_encode($table);
    echo $jsonTable;
}
?>