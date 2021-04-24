<?php
include('../db.php');
if(isset($_POST['lightfan'])){
  $table = array();
  $i = $j = 0;
    
    $query1 = "SELECT SUM(total) AS powers, endTime AS etime FROM `lights` GROUP BY date(timed) limit 5";
    $result1 = mysqli_query($conn, $query1);
    while($row = mysqli_fetch_array($result1)){
      $d = date_create($row['etime']);
      $d = date_format($d,"Y-m-d") . " IST";
      $table[0][$i] = round(floatval($row['powers']), 2);
      $table[1][$j] = $d;
      $i += 1;
      $j += 1;
    }

    $i = $j = 0;
    $query2 = "SELECT SUM(total) AS powers, endTime AS etime FROM `fans` GROUP BY date(timed) limit 5";
    $result2 = mysqli_query($conn, $query2);
    while($row = mysqli_fetch_array($result2)){
      $d = date_create($row['etime']);
      $d = date_format($d,"Y-m-d") . " IST";
      $table[2][$i] = round(floatval($row['powers']), 2);
      $table[3][$j] = $d;
      $i += 1;
      $j += 1;
    }
    $i = $j = 0;
    $jsonTable = json_encode($table);
    echo $jsonTable;
}
?>