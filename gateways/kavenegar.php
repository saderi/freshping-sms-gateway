<?php
    
    
    function kavenegar_send($apiKey, $receptor, $message)
    {
        try
        {   
            $api = new \Kavenegar\KavenegarApi($apiKey);
            $api->Send($sendnumper,$receptor,$message);
        }
        catch(ApiException $ex)
        {
            return $e->errorMessage();
        }
        catch(HttpException $ex)
        {
            return $e->errorMessage();
        }
    

    }