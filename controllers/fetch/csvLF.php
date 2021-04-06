<?php

include('../db.php');
if (isset($_POST['fils'])) {
    $from = $_POST['fDate'];
    $to = $_POST['tDate'];
    $filter = $_POST['fils'];
    $Did = intval($_POST['Did']);

    switch ($filter) {
        case "date":
            $query = "SELECT SUM(total) AS powers, endTime AS etime FROM lights WHERE Did='{$Did}' AND (endtime BETWEEN '{$from}' AND '{$to}') GROUP BY date(endTime)";
            break;
        case "month":
            $query = "SELECT SUM(total) AS powers, endTime AS etime FROM lights WHERE Did='{$Did}' AND (endtime BETWEEN '{$from}' AND '{$to}') GROUP BY month(endTime)";
            break;
        case "year":
            $query = "SELECT SUM(total) AS powers, endTime AS etime FROM lights WHERE Did='{$Did}' AND (endtime BETWEEN '{$from}' AND '{$to}') GROUP BY year(endTime)";
            break;
    }


    $result = mysqli_query($conn, $query);
    $table = array();
    $table[0][0] = "Power(W)";
    $table[0][1] = "Time";
    $i = $j = 1;

    while ($row = mysqli_fetch_array($result)) {
        $table[$i][0] = round(floatval($row['powers']), 5);
        $table[$j][1] = $row['etime'];
        $i += 1;
        $j += 1;
    }
    $jsonTable = json_encode($table);
    echo $jsonTable;
}
