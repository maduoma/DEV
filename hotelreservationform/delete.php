<?php
$to_email = "Your email";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: sender\'s email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Mail sucessfully sent to $to_email...";
} else {
    echo "Mail sending failed!";
}

?>



