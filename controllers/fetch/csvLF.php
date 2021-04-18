<?php

include('../db.php');
if (isset($_POST['fils'])) {
    $from = $_POST['fDate'];
    $to = $_POST['tDate'];
    $filter = $_POST['fils'];
    $Did = intval($_POST['Did']);

    function getQuery($id, $f, $t, $fils)
  {
    if ($id == 51) {
      $queryf = "SELECT SUM(total) AS powers, endTime AS etime FROM lights WHERE (endtime BETWEEN '{$f}' AND '{$t}') GROUP BY " . $fils . "(endTime)";
    } elseif ($id == 52) {
      $queryf = "SELECT SUM(total) AS powers, endTime AS etime FROM fans WHERE (endtime BETWEEN '{$f}' AND '{$t}') GROUP BY " . $fils . "(endTime)";
    } elseif($id == 16 || $id == 17 || $id == 18 || $id == 19) {
        $queryf = "SELECT SUM(total) AS powers, endTime AS etime FROM lights WHERE Did='{$id}' AND (endtime BETWEEN '{$f}' AND '{$t}') GROUP BY " . $fils . "(endTime)";
    } elseif ($id == 26 || $id == 25){
        $queryf = "SELECT SUM(total) AS powers, endTime AS etime FROM fans WHERE Did='{$id}' AND (endtime BETWEEN '{$f}' AND '{$t}') GROUP BY " . $fils . "(endTime)";
    }

    return $queryf;
  }

  $query = getQuery($Did, $from, $to, $filter);


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
