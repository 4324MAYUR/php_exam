<?php

header("Access-Control-Allow-Methods: GET");
header("Content-type: application/json");

include("../config/config.php");

$config = new Config();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $id = $_POST['id'];

    $result=$config->singledata_Train($id);
    
    $record=mysqli_fetch_assoc($result);
    
    if($record){
        $arr['data']=$record;
    }else{
        $arr['error']="railway data is not found";
    }
}else{
    $arr['error']="Please Select POST Method...";   
}
echo json_encode($arr);

?>