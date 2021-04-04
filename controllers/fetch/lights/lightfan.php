<?php

include('../../db.php');
if(isset($_POST['lightfan'])){

    switch($filter){
      case "date": $query = "SELECT SUM(total) AS powers, UNIX_TIMESTAMP(endTime) AS etime FROM lights WHERE Did='{$Did}' AND (endtime BETWEEN '{$from}' AND '{$to}') GROUP BY date(endTime)";break;
      case "month": $query = "SELECT SUM(total) AS powers, UNIX_TIMESTAMP(endTime) AS etime FROM lights WHERE Did='{$Did}' AND (endtime BETWEEN '{$from}' AND '{$to}') GROUP BY month(endTime)";break;
      case "year": $query = "SELECT SUM(total) AS powers, UNIX_TIMESTAMP(endTime) AS etime FROM lights WHERE Did='{$Did}' AND (endtime BETWEEN '{$from}' AND '{$to}') GROUP BY year(endTime)";break;
    }
    

    $result = mysqli_query($conn, $query);
    $table['rows'] = $rows;
    $jsonTable = json_encode($table);
    echo $jsonTable;
}
?>