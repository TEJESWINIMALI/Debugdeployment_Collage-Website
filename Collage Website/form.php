<?php
$name =$ _POST['name'];
$email =$ _POST['email'];
$subje =$ _POST['subject'];
$message =$ _POST['message'];


$email_form ='info@gmail.com';

$email_subject = 'new form Submission';

$email_body = " User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n".

$to ='Tejuadvitot@gmail.com';

$headers = "From: $email_from \r\n";
$headers = "Replay-To: $visitor_email \r\n"; 

mail($to,$email_subject,$email_body,$headers);

?>