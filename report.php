<?php

$method = $_SERVER['REQUEST_METHOD'];

//Process only when method is POST
if($method == "POST"){
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);

    $response = new \stdClass();
    $response->campaign_id = $json->data->campaign_id;
    $response->campaign_name = $json->data->campaign_name;
    $response->event_type = $json->event_type;
    $res =  json_encode($response);
    echo $res;

    mail("shweta.s@endurance.com","CIO-Report",$res);    
}
else{
    echo "method not allowed";
}

?>
