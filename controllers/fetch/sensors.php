<?php

include('../../db.php');
if(isset($_POST['fils'])){

  function getQuery($id, $f, $t, $fils)
  {
    if ($id == 30) {
      $queryf = "SELECT AVG(temperature) AS temperature, UNIX_TIMESTAMP(timed) AS etime FROM sensors WHERE (timed BETWEEN '{$f}' AND '{$t}') GROUP BY " . $fils . "(timed)";
    } elseif ($id == 31) {
      $queryf = "SELECT AVG(humidity) AS humidity, UNIX_TIMESTAMP(timed) AS etime FROM sensors WHERE (timed BETWEEN '{$f}' AND '{$t}') GROUP BY " . $fils . "(timed)";
    } else {
      $queryf = "SELECT AVG(moisture) AS moisture, UNIX_TIMESTAMP(timed) AS etime FROM sensors WHERE (timed BETWEEN '{$f}' AND '{$t}') GROUP BY " . $fils . "(timed)";
    }

    return $queryf;
  }
    $from = $_POST['fDate'];
    $to = $_POST['tDate'];
    $filter = $_POST['fils'];
    $Did = intval($_POST['Did']);
    
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
              'label' => 'Power', 
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
                  "v" => $row["powers"]
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
