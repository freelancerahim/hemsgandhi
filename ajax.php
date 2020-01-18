<?php
$email = $_POST['email'];
$api_response = file_get_contents('https://api.thechecker.co/v2/verify?email='.$email.'&api_key=06807b2a597e69ffb1ad39b092e7650b720311026758256ad9af0a7d9ff72e3e');
$api_response_decoded = json_decode($api_response, true);

if ($api_response_decoded['reason'] == "accepted_email"){
    echo "true";
}else{
    echo "false";
}