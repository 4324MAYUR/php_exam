<?php

    header("Access-Control-Allow-Method: PUT, PATCH");
    header("Content-Type: application/json");
    
    include("../../config/config.php");

    $res = array();

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == "PUT" || $_SERVER['REQUEST_METHOD'] == "PATCH") {

        $data = file_get_contents("php://input");   

        $record = array();

        parse_str($data,$record); 

        $id = $record['id'];
        $name = $record['p_name'];
    
        $res['msg'] = $config->updatedata_Booking($id,$name);

    }
    else {
        $res['msg'] = "Only Access PUT AND PATCH HTTP Request Type.";
    }

    echo json_encode($res);
?>