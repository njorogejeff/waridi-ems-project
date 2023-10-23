<?php 
include 'global.php';

//prepare an array that will contain your account details and payment details.
$data=array(
        'api_key' =>"FgASm2U4yMIW3BvEH9XKJLcHR8w71jEvjZaCxlYHOIZ7rV8Z5N",//provide api keyhere
        'username'=>"joseph",//provide username here
        'amount'=>"10",//provide amount here
        'phone'=>"0727083400",//provide phone number here
        'user_reference'=>"4936"//provide user reference here
    );
  
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/stk",$jdata);
print_r($response);
//Thats it hit send and we will take care of the rest
