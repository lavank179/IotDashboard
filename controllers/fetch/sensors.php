<?php

include('../db.php');
if(isset($_POST['fils'])){

  $titles = "";

  function getQuery($id, $f, $t, $fils)
  {
    if ($id == 30) {
      $queryf = "SELECT (temperature) AS val, UNIX_TIMESTAMP(timed) AS etime FROM sensors WHERE (timed BETWEEN '{$f}' AND '{$t}')";
    } elseif ($id == 31) {
      $queryf = "SELECT (humidity) AS val, UNIX_TIMESTAMP(timed) AS etime FROM sensors WHERE (timed BETWEEN '{$f}' AND '{$t}')";
    } else {
      $queryf = "SELECT (moisture) AS val, UNIX_TIMESTAMP(timed) AS etime FROM sensors WHERE (timed BETWEEN '{$f}' AND '{$t}')";
    }

    return $queryf;
  }
    $from = $_POST['fDate'];
    $to = $_POST['tDate'];
    $filter = $_POST['fils'];
    $Did = intval($_POST['Did']);
    if($Did == 30) $titles = "Temperature";
    elseif($Did == 31) $titles = "Humidity";
    elseif($Did == 32) $titles = "Soil Moisture";
    
    $query = getQuery($Did, $from, $to, $filter);

    $result = mysqli_query($conn, $query);
    $jsonArray = array();

    $rows = array();
            $table = array();

            $table['cols'] = array(
            array(
              'label' => 'Date Time', 
              'type' => 'datetime'
            ),
            array(
              'label' => $titles, 
              'type' => 'number'
            )
            );

            while($row = mysqli_fetch_array($result))
            {
            $sub_array = array();
            $datetime = explode(".", $row["etime"]);
            $sub_array[] =  array(
                  "v" => 'Date(' . $datetime[0] . '000)'
                );
            $sub_array[] =  array(
                  "v" => $row["val"]
                );
            $rows[] =  array(
                "c" => $sub_array
                );
            }
            $table['rows'] = $rows;
            $jsonTable = json_encode($table);
            echo $jsonTable;
}
?>
