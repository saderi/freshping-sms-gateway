<?php 

## kavenegar.com API config ##
$apiKeys ['kavenegar'] = '';
$receptor ['kavenegar'] = '';


## clickatell.com API config ##
$apiKeys ['clickatell'] = '';
$receptor ['clickatell'] = '';

## Select active sender
$activeSender = array(
                'kavenegar' => true ,
                'clickatell' => true
                 );

## If you do not neet get notify for some of your monitoring website, You can add your site name in this array.
// You must use your monitoring website name.
$exceptionList = array(
                    'Sample Name'
                 );