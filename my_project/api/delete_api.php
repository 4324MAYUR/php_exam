<?php

header("Access-Control-Allow-Methods: DELETE");
header("Content-type: application/json");

include("../config/config.php");

$config = new Config();

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
 
  $input = file_get_contents('php://input');

  parse_str($input, $_DELETE);

  $id = $_DELETE['id'];

  $res = $config->deletedata_train($id);

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
