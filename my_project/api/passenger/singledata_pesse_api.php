<?php

    header("Access-Control-Allow-Method: GET");
    header("content-Type: application/json");

    include("../../config/Config.php");

    $config = new Config();

    if($_SERVER['REQUEST_METHOD']=="POST"){

        $id = $_POST['id'];

        $result=$config->getSingledata_Booking($id);
        
        $record=mysqli_fetch_assoc($result);
        
        if($record){
            $arr['data']=$record;
        }else{
            $arr['error']="Bookind data is not found";
        }
    }else{
        $arr['error']="Please Select POST Method...";   
    }
    echo json_encode($arr);

?>