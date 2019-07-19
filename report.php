<?php

$json = file_get_contents('php://input');
$data = json_decode($json,1);

$data_static = "Sab lemon hai...";
echo "Static data : " . $data_static;

print_r($data);

$fWrite = fopen("log.txt","a");
$wrote = fwrite($fWrite, $data);

$fWriteS = fopen("log_static.txt","a");
$wroteS = fwrite($fWriteS, $data_static);

fclose($fWrite);
fclose($fWriteS);



// $method = $_SERVER['REQUEST_METHOD'];

// //Process only when method is POST
// if($method == "POST"){
//     $requestBody = file_get_contents('php://input');
//     $json = json_decode($requestBody);

//     $event = $json->event_type;
//     $campaign = $json->data->campaign_name;

//     $response = new \stdClass();
//     $response->event = $event;
//     $response->campaign = $campaign;
//     $res =  json_encode($response);
//     echo $res;

//     mail("shweta.s@endurance.com","CIO-Report",$res);    
// }
// else{
//     echo "method not allowed";
// }

?>
