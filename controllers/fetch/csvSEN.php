<?php

include('../db.php');
if (isset($_POST['fils'])) {
  $from = $_POST['fDate'];
  $to = $_POST['tDate'];
  $filter = $_POST['fils'];
  $Did = intval($_POST['Did']);

  $table = array();
  $i = $j = 1;

  function getQuery($id, $f, $t, $fils)
  {
    if ($id == 30) {
      $queryf = "SELECT (temperature) AS val, (timed) AS etime FROM sensors WHERE (timed BETWEEN '{$f}' AND '{$t}')";
    } elseif ($id == 31) {
      $queryf = "SELECT (humidity) AS val, (timed) AS etime FROM sensors WHERE (timed BETWEEN '{$f}' AND '{$t}')";
    } elseif ($id == 32) {
      $queryf = "SELECT (moisture) AS val, UNIX_TIMESTAMP(timed) AS etime FROM sensors WHERE (timed BETWEEN '{$f}' AND '{$t}')";
    }

    return $queryf;
  }

  $query = getQuery($Did, $from, $to, $filter);
  if ($Did == 30) $table[0][0] = "Temperature (C)";
  elseif ($Did == 31) $table[0][0] = "Humidity (%)";
  elseif ($Did == 32) $table[0][0] = "Soil Moisture (%)";


  $result = mysqli_query($conn, $query);
  $table[0][1] = "Time";

  while ($row = mysqli_fetch_array($result)) {
    $table[$i][0] = round(floatval($row['val']), 5);
    $table[$j][1] = $row['etime'];
    $i += 1;
    $j += 1;
  }
  $jsonTable = json_encode($table);
  echo $jsonTable;
}
?>