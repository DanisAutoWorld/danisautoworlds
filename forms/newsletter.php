<?php
// "dan auto" version: simple PHP mail newsletter handler

$to = 'marklikyfc@gmail.com'; // change to your email address

$email = isset($_POST['email']) ? trim($_POST['email']) : '';

$subject = "New Newsletter Subscription";
$body = "Email: $email\n";
$headers = "From: $email\r\nReply-To: $email\r\n";

if ($email) {
    if (mail($to, $subject, $body, $headers)) {
        echo 'OK';
    } else {
        echo 'Error: Mail not sent';
    }
} else {
    echo 'Error: Please enter a valid email.';
}
?>