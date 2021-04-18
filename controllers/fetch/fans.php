<?php

include('../db.php');
if (isset($_POST['fils'])) {

  function getQuery($id, $f, $t, $fils)
  {
    if ($id == 50) {
      $queryf = "SELECT SUM(total) AS powers, UNIX_TIMESTAMP(endTime) AS etime FROM fans WHERE (endtime BETWEEN '{$f}' AND '{$t}') GROUP BY " . $fils . "(endTime)";
    } elseif ($id == 60) {
      $queryf = "SELECT SUM(total) AS powers, Did AS id FROM fans WHERE (endtime BETWEEN '{$f}' AND '{$t}') GROUP BY Did";
    } else {
      $queryf = "SELECT SUM(total) AS powers, UNIX_TIMESTAMP(endTime) AS etime FROM fans WHERE Did='{$id}' AND (endtime BETWEEN '{$f}' AND '{$t}') GROUP BY " . $fils . "(endTime)";
    }

    return $queryf;
  }

  $from = $_POST['fDate'];
  $to = $_POST['tDate'];
  $filter = $_POST['fils'];
  $Did = intval($_POST['Did']);

  $query = getQuery($Did, $from, $to, $filter);


  $result = mysqli_query($conn, $query);
  $table = array();
  $i = $j = 1;

  if ($Did == 60) {
    while ($row = mysqli_fetch_array($result)) {
      $table[0][0] = "Power(W)";
      $table[0][1] = "Fan ID no.";
      $table[$i][0] = $row['id'];
      $table[$j][1] = round(floatval($row['powers']), 3);
      $i += 1;
      $j += 1;
    }
  } else {
    $rows = array();

    $table['cols'] = array(
      array(
        'label' => 'Date Time',
        'type' => 'datetime'
      ),
      array(
        'label' => 'power',
        'type' => 'number'
      )
    );

    while ($row = mysqli_fetch_array($result)) {
      $sub_array = array();
      $datetime = explode(".", $row["etime"]);
      $sub_array[] =  array(
        "v" => 'Date(' . $datetime[0] . '000)'
      );
      $sub_array[] =  array(
        "v" => $row["powers"]
      );
      $rows[] =  array(
        "c" => $sub_array
      );
    }
    $table['rows'] = $rows;
  }
  $i = $j = 1;
  $jsonTable = json_encode($table);
  echo $jsonTable;
}
?>