<?php

header("Access-Control-Allow-Methods: DELETE");
header("Content-type: application/json");

include("../config/config.php");

$config = new Config();

if ($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'PATCH') {
 
  $input = file_get_contents('php://input');

  parse_str($input, $_UPDATE);

  $id = $_UPDATE['id'];
  $train_name = $_UPDATE['train_name'];

  $res = $config->updatedata_train($train_name,$id);

  if($res)
  {
    $arr['msg'] = "true";
  }else{
    $arr['msg'] = "false";
  }


} else {

    $arr['error'] = "Only Access POST HTTP Request Type.";
} 

echo json_encode($arr);

?>
