<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;

$error_message = '';
if(isset($_POST["send"])){

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $date = htmlspecialchars($_POST["date"]);
    $time = htmlspecialchars($_POST["time"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $mg = new Mailgun('d720e6fa4b9634b558dcb5863bfbb4f7-47317c98-faa6435b'); // For US servers
    $domain = 'sandbox63a4e019e8bb4d7cb2666133ae923151.mailgun.org';

    $result = $mg->sendMessage('sandbox63a4e019e8bb4d7cb2666133ae923151.mailgun.org', [
        'from'    => $email,
        'to'      => 'metinzakirov@gmail.com',
        'subject' => $message,
        'text'    => 'It is so simple to send a message.'
    ]);
}
?>