<?php
require_once "vendor/autoload.php";

if (!empty($_POST[3])){
    $email = $_POST[3];
    $getresponse = new GetResponse('fr6rjutuncta5pala6slheghqyci24xi');
    $rahin = $getresponse->addContact(array(
        'email'             => $email,
        'campaign'          => array('campaignId' => 'WoUhX')

    ));
    header("Location: confirm.html");
}else{
    header("Location: index.php");
}