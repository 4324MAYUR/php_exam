<?php

header("Access-Control-Allow-Methods: POST");
header("Content-type: application/json");

include("../config/config.php");

$config = new Config();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $train_name = $_POST['train_name'];

 $res = $config->insertdata_train($train_name);

 $arr['msg'] = "SUccessfull..";

} else {

    $arr['error'] = "Only Access POST HTTP Request Type.";
} 

echo json_encode($arr);

?>
