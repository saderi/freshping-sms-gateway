<?php

// Get data from webhook
$json_data = file_get_contents("php://input");
if (empty($json_data))
    die();

// Log webhook action
$file = 'access.log';
$current = file_get_contents($file);
$current .= date('[j/M/Y H:i:s]'). " $json_data \n";
file_put_contents($file, $current);

// Get config variables
require  'config.php';
require  'vendor/autoload.php';

$data = json_decode($json_data);
$webhook_event_data = $data->webhook_event_data;
if ($webhook_event_data->check_state_name == 'Not Responding') {

    $message = "Your site has a problem. Site name: $webhook_event_data->request_url.";
    foreach ($activeSender as $senderName => $senderStatus) {
        if ($senderStatus) {
            require  "gateways/$senderName.php";
            $function_send = $senderName.'_send';
            $function_send($apiKeys[$senderName],$receptor[$senderName], $message);
        }
    }

}

?>
