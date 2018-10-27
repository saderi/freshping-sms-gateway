<?php
    
    
    function kavenegar_send($ApiKey, $sendnumber, $receptor, $message)
    {

        try
        {   
            $api = new \Kavenegar\KavenegarApi($ApiKey);
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