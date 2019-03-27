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
//
//    # Instantiate the client.
////    $mgClient = new Mailgun('036bcbf18d89fc6bec6237815877c1ca-e51d0a44-89eb75f0');
//    $ip = '104.130.122.30';


    // First, instantiate the SDK with your API credentials
    $mg = new Mailgun('d720e6fa4b9634b558dcb5863bfbb4f7-47317c98-faa6435b'); // For US servers
    $domain = 'sandbox63a4e019e8bb4d7cb2666133ae923151.mailgun.org';

    // Now, compose and send your message.
    // $mg->messages()->send($domain, $params);
    $result = $mg->sendMessage('sandbox63a4e019e8bb4d7cb2666133ae923151.mailgun.org', [
        'from'    => $email,
        'to'      => 'metinzakirov@gmail.com',
        'subject' => $message,
        'text'    => 'It is so simple to send a message.'
    ]);

    # Issue the call to the client.
//    $result = $mgClient->post("domains", array(
//        "total_count" => 1,
//        "smtp_login" => "postmaster@sandbox70e67361a1ec4a3daa70d81c37eae905.mailgun.org",
//        "name" => "smtp.mailgun.org",
//        "smtp_password" => "fc11801a21d69627a3a3d593e6f7f788-e51d0a44-c8d5ff23",
//        "wildcard" => true,
//        "spam_action" => "disabled",
//        "state" => "active"
//    ));

//    var_dump($result);

//    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        $error_message = "Invalid email format";
//    }
//
//    if(strtotime($date.$time)<=time()){
//        $error_message = "You can not book your old date";
//    }
//
//
//    if($error_message!=""){
//        $error_message = '<p class="short">'.$error_message.'</p>';
//
//    }else{
//        $to      = $email;
//        $subject = 'Your Reservation Confirmation for Butazzo Pizza';
//        $message = 'Butazzo Pizza '."\r\n"."Table for 2 on ".$date." ".$time."Name: Elvin Mammadov \r\n".$message;
//        $headers = 'From: webmaster@example.com' . "\r\n" .
//            'Reply-To: webmaster@example.com' . "\r\n" .
//            'X-Mailer: PHP/' . phpversion();
//        mail($to, $subject, $message, $headers);
//    }
}
?>