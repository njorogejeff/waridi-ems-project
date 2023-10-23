<?php 
include 'global.php';
//Use this API to buy Airtime.
        $data=array(
         'api_key' =>"",//provide api keyhere
        'username'=>"",//provide username here
        'recipient'=>'',//provide recipient phone number in international format.
        'amount'=>'',//provide airtime amount to be sent
    
    );
  
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/airtime",$jdata);
print_r($response);
