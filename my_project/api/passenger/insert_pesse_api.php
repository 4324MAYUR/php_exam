<?php

    header("Access-Control-Allow-Method: POST");
    header("Content-Type: application/json");
    
   include "../../config/config.php";

   $config = new Config();
   
   if($_SERVER["REQUEST_METHOD"]=='POST')
   {
        $p_name = $_POST['p_name'];

        $res = $config->insertdata_Booking($p_name);

        $ress['msg'] = $res ? "Booking SuccesFully..." : "Insertion Failed..." ;
   }
   else
    {
        $ress['msg'] = "Only Access POST HTTP Request Type.";
    }

    echo json_encode($ress);
?>