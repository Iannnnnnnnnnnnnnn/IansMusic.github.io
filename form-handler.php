<?php
$name = $_POST['name'];
$visitor_email = $_POSt['email'];
$message = $_POST['message'];

$email_from = 'MyMusic@TheHomepage.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Message: $message.\n;

$to = 'ianniessen@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_body, $headers);

header("Location: Contact.html");

?>