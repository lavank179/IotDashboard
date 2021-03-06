<?php



if(isset($_POST['stat'])){

    $jsonString = file_get_contents('data.json');
    $data = json_decode($jsonString, true);

    
    
    for($item = 0; $item < count($data); $item++) {

        if($data[$item]['id'] == $_POST['name']){
            $data[$item]['status'] = $_POST['stat'];
        }
    }

    
    $newJsonString = json_encode($data);
file_put_contents('data.json', $newJsonString);
echo $newJsonString;
}
 ?>