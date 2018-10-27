<?php

// Get data from webhook
$json_data = file_get_contents("php://input");
if (empty($json_data))
    die();

// Get config variables
require  'config.php';
require  'vendor/autoload.php';

$data = json_decode($json_data);
$webhook_event_data = $data->webhook_event_data;

if ($webhook_event_data->http_status_code != 200) {

    $message = "Your site has a problem. Site name: $webhook_event_data->application_name.";

    foreach ($activeSender as $senderName => $senderStatus) {
        if ($senderStatus) {
            require  "gateways/$senderName.php";
            $function_send = $senderName.'_send';
            $function_send($apiKeys[$senderName],$receptor[$senderName], $message);
        }
    }

}

?>
