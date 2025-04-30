<?php

header("Access-Control-Allow-Methods: GET");
header("Content-type: application/json");

include("../config/config.php");

$config = new Config();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
 
 $res = $config->fetchdata_train();

 $all_data = [];

 while($record = mysqli_fetch_assoc($res))
 {
    array_push($all_data, $record);
    $arr['data'] = $all_data;
 }

 $arr['msg'] = "SUccessfull..";

} else {

    $arr['error'] = "Only Access POST HTTP Request Type.";
} 

echo json_encode($arr);

?>
