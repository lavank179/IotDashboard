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
      $queryf = "SELECT SUM(total) AS powers, endTime AS etime, startTime as stime FROM fans WHERE (endtime BETWEEN '{$f}' AND '{$t}') GROUP BY " . $fils . "(endTime)";
    } elseif ($id == 16 || $id == 17 || $id == 18 || $id == 19) {
      $queryf = "SELECT SUM(total) AS powers, endTime AS etime FROM lights WHERE Did='{$id}' AND (endtime BETWEEN '{$f}' AND '{$t}') GROUP BY " . $fils . "(endTime)";
    } elseif ($id == 26 || $id == 25) {
      $queryf = "SELECT SUM(total) AS powers, endTime AS etime, startTime as stime FROM fans WHERE Did='{$id}' AND (endtime BETWEEN '{$f}' AND '{$t}') GROUP BY " . $fils . "(endTime)";
    } elseif ($id == 60) {
      $queryf = "SELECT SUM(total) AS powers, Did AS id FROM lights WHERE (endtime BETWEEN '{$f}' AND '{$t}') GROUP BY Did";
    }

    return $queryf;
  }

  $query = getQuery($Did, $from, $to, $filter);


  $result = mysqli_query($conn, $query);
  $table = array();

  if ($Did == 60) {
    $table[0][0] = "Power(W)";
    $table[0][1] = "Lights Zone";
  } else {
    $table[0][0] = "Power(W)";
    $table[0][1] = "Time";
  }
  $i = $j = 1;

  while ($row = mysqli_fetch_array($result)) {

    if ($Did == 52 || $Did == 25 || $Did == 26) {

      $samp = date('Y M d', $row['etime']);
      if($samp == '2021-03-17'){
        $s = intval(strtotime($row['stime'])) - intval(strtotime($row['etime']));
      } else {
        $s = intval(strtotime($row['etime'])) - intval(strtotime($row['stime']));
      }


      $dat = $s * (80 / 3600);
      $table[$i][0] = round(floatval($dat), 5);
      $table[$j][1] = $row['etime'];
      $i += 1;
      $j += 1;
    } elseif ($Did == 60) {
      $table[$i][0] = round(floatval($row['powers']), 5);
      $table[$j][1] = $row['id'];
      $i += 1;
      $j += 1;
    } else {
      $table[$i][0] = round(floatval($row['powers']), 5);
      $table[$j][1] = $row['etime'];
      $i += 1;
      $j += 1;
    }
  }
  $jsonTable = json_encode($table);
  echo $jsonTable;
}
?>