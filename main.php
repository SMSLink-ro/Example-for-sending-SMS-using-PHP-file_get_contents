<?php

/* 

  Get your SMSLink / SMS Gateway Connection ID and Password from 
  https://www.smslink.ro/get-api-key/

*/

$connectionId = "MyConnectionID";
$password = "MyConnectionPassword";
$smsTo = "07xyzzzzzz";
$smsMessage = "My Test Message";

/*

  HTTPS API Endpoint:  https://secure.smslink.ro/sms/gateway/communicate/index.php
  HTTP API Endpoint:   http://www.smslink.ro/sms/gateway/communicate/index.php

*/

$response = file_get_contents("http://www.smslink.ro/sms/gateway/communicate/index.php".
                "?connection_id=".$connectionId.
                "&password=".$password.
                "&to=".$smsTo.
                "&message=".urlencode($smsMessage)
              );

echo $response;

?>