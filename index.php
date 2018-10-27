<?php

// Get config variables
require  'config.php';
require  'vendor/autoload.php';

// Load kavenegar function
require  'gateways/kavenegar.php';

/* Webhook test data
{
    "organization_name": "Organization", 
    "webhook_event_id": 42571, "organization_id": 125, 
    "webhook_type": "AL", 
    "webhook_event_data": {
        "check_state_name": "Available", 
        "check_target_response_time": 100, 
        "recently_started_check_state_name": null, 
        "check_id": 1, 
        "recently_started_check_start_time": null, 
        "http_status_code": 200, 
        "request_start_time": "2018-10-27T10:27:58.703537+00:00", 
        "check_name": "Example check", 
        "recently_started_check_http_status_code": null, 
        "application_name": "Webhook test", 
        "recently_started_check_response_time": null, 
        "request_url": "https://www.example.com/", 
        "check_computed_target_response_time": 200, 
        "response_time": 50
        }, 
    "webhook_id": 400, 
    "webhook_event_created_on": "2018-10-27T10:27:58.703970+00:00"
}
*/

$json_data = file_get_contents("php://input");
$data = json_decode($json_data);
$webhook_event_data = $data->webhook_event_data;


if ($webhook_event_data->http_status_code != 200) {

    $message = "Your application has a problem. Application name: $webhook_event_data->application_name. ";
    kavenegar_send($kavenegarApi, $sendnumber, $phoneNumber, $message);

}

?>
