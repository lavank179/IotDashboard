<?php
$jsonString = file_get_contents('data.json');
$data = json_decode($jsonString, true);

$l = count($data);


if(isset($_POST['stat'])){
    for($item = 0; $item < count($data); $item++) {

        if($data[$item]['id'] == $_POST['name']){
            $data[$item]['status'] = $_POST['stat'];
        }
    }
}

elseif(isset($_POST['dName'])) {
    $data[$l]['id'] = intval($_POST['dId']);
    $data[$l]['name'] = $_POST['dName'];
    $data[$l]['status'] = "off";
    $data[$l]['category'] = $_POST['dCate'];
}

elseif(isset($_POST['dRem'])){
    for($item = 0; $item < count($data); $item++) {

        if($data[$item]['id'] == intval($_POST['dId'])){
            unset($data[$item]);
        }
    }
}

$newJsonString = json_encode($data);
    if (file_put_contents('data.json', $newJsonString)){
        echo "success";
    } else {
        echo "Not able to add. please try again";
    }
 ?>