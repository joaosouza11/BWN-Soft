<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'website@email.com'

$email_subject = 'New Forms message'

$email_body = "Name: $name.\n".
              "Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "Message: $message.\n";

$to = 'user@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>