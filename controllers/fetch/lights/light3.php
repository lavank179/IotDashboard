<?php

include('../../db.php');
if(isset($_POST['fils'])){
    $from = $_POST['fDate'];
    $to = $_POST['tDate'];
    $filter = $_POST['fils'];
    $Did = intval($_POST['Did']);

    switch($filter){
      case "date": $query = "SELECT SUM(total) AS powers, UNIX_TIMESTAMP(endTime) AS etime FROM lights WHERE Did='{$Did}' AND (endtime BETWEEN '{$from}' AND '{$to}') GROUP BY date(endTime)";break;
      case "month": $query = "SELECT SUM(total) AS powers, UNIX_TIMESTAMP(endTime) AS etime FROM lights WHERE Did='{$Did}' AND (endtime BETWEEN '{$from}' AND '{$to}') GROUP BY month(endTime)";break;
      case "year": $query = "SELECT SUM(total) AS powers, UNIX_TIMESTAMP(endTime) AS etime FROM lights WHERE Did='{$Did}' AND (endtime BETWEEN '{$from}' AND '{$to}') GROUP BY year(endTime)";break;
    }
    

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
              'label' => 'power', 
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
