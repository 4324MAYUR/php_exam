<?php

    header("Access-Control-Allow-Method: DELETE");
    header("content-Type: application/json");

    include("../../config/Config.php");

    $config = new Config();

    if($_SERVER['REQUEST_METHOD']=="DELETE"){

        $input = file_get_contents("php://input");

        parse_str($input,$_DELETE);

        $id = $_DELETE['id'];

        $res = $config->deletedata_Bookings($id);

        if($res){ 

            $arr['data']="Booking data deleted Successfuly";

        }else{

            $arr['error']="Booking data deletion failed";

        }

    }else{

        $arr['error']="Only Access DELETE HTTP Request Type.";

    }

    echo json_encode($arr);

?>