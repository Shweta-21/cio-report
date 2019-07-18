<?php

$method = $_SERVER['REQUEST_METHOD'];

//Process only when method is POST
if($method == "POST"){
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);

    $text = $json->result->parameters->text;
    echo ($text);

    switch($text) {
        case 'hi':
            $speech = "Hi, Nice to meet you";
            break;

        case 'bye':
            $speech = "Bye, Good Night";
            break;
        
        case 'anything':
            $speech = "Yes, you can type anything here.";
            break;
        default:
            $speech = "sorry, I ddint get that, Please ask me something else.";
            break;
    }
    $response = new \stdClass();
    $response->speech = "";
    $response->displayText = "";
    $response->text = "";
    $response->source = "webhook";
    echo json_encode($response);
    echo ('echoing data2');
}
else{
    echo "method not allowed";
}

?>
