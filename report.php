<?php


    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);

    $response = new \stdClass();
    $response->campaign_id = $json->data->campaign_id;
    $response->campaign_name = $json->data->campaign_name;
    $response->customer_id = $json->data->customer_id;
    $response->customer_email = $json->data->email_address;
    $response->email_name = $json->data->message_name;
    $response->event_type = $json->event_type;
    $response->timestamp = $json->timestamp;
    $res =  json_encode($response);
    echo $res;

    mail("shweta.s@endurance.com","CIO-Report",$res);    

?>
