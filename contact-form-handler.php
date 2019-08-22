<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'psytek@psyteksolutions.tk';
$email_subject = "feedbak from a visitor";
$email_body = "user name: $name.\n";
               "user email : $visitor_email.\n";
                "user message: $message\n";

$to ="akhilashok405@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Replay-To: $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?>