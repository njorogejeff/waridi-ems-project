<?php 
$amount=$_REQUEST['amount'];
$phone_number=$_REQUEST['contact'];
include 'payherokenya-sps-main/global.php';

//prepare an array that will contain your account details and payment details.
$data=array(
        'api_key' =>"0k4KhW2ATMqXjBJwU6QqNPNRhyfp7YjEdqlvyf0wEyuEENhv0X",//provide api keyhere
        'username'=>"njoroge.jeff",//provide username here
        'amount'=>$amount,//provide amount here
        'phone'=>$phone_number,//provide phone number here
        'user_reference'=>"313432",//provide user reference here
        'channel_id'=>"310"//provide channel id
    );
  
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/external_express",$jdata);
print_r($response);
//Thats it hit send and we will take care of the rest
    echo '<script>
    window.alert("Payment has been initiated succesfully.Kindly check your phone for an STK push and provide PIN to complete the payment.");
    window.history.back();
    </script>';
?>

