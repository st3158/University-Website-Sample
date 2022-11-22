<?php
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$email_from = 'info@yourwebsite.com';
$email_subject='New Form Submission';
$email_body="User Name: $name.\n","Use Email: $visitor_email.\n","Subject: $subject.\n","User Message: $message.\n";
$To ='shashankt1112@gmailcom';
$headers = "From :$email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($To,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>