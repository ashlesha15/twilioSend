<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once "vendor/autoload.php"; 
 
use Twilio\Rest\Client; 
 echo "Hello from Ashlesha ";
$sid    = "AC9b0fc4e7a41d73edd2faa4c334a6b3b1"; 
$token  = "01b6b574f09784b43620b0274a7e5fab"; 
$twilio = new Client($sid, $token); 

$message = $twilio->messages 
                  ->create("+19173490168", // to 
                           array( 
                               "from" => "+14122755226",       
                               "body" => "hey from Ashlesha CS 643 Fall 2018 " 
                           ) 
                  ); 
 
