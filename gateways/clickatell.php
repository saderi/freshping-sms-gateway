<?php

use Clickatell\Rest;
use Clickatell\ClickatellException;

function clickatell_send($apiKey, $receptor, $message)
{

	$clickatell = new \Clickatell\Rest($apiKey);

	// Full list of support parameters can be found at https://www.clickatell.com/developers/api-documentation/rest-api-request-parameters/
	try {
	    $result = $clickatell->sendMessage(['to' => [$receptor], 'content' => $message]);

	} catch (ClickatellException $e) {
	    // Any API call error will be thrown and should be handled appropriately.
	    // The API does not return error codes, so it's best to rely on error descriptions.
	    var_dump($e->getMessage());
	}

}
