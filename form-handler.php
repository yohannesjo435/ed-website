<?php
$name = $_POST['name']
$vistor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submisson';

$email_body = "User Name: $name.\n";
               "User Email: $vistor_email.\n";
               "User Email: $subject.\n";
               "User Email: $message .\n";
               
$to = 'yohanes435@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html"); 
?>