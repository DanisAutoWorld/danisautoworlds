<?php
// "dan auto" version: simple PHP mail contact form handler

$to = 'marklikyfc@gmail.com'; // change to your email address
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : 'Contact Form Submission';

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

$body = "From: $name\n";
$body .= "Email: $email\n";
if ($phone) $body .= "Phone: $phone\n";
$body .= "Message:\n$message\n";

$headers = "From: $name <$email>\r\nReply-To: $email\r\n";

if ($name && $email && $message) {
    if (mail($to, $subject, $body, $headers)) {
        echo 'OK';
    } else {
        echo 'Error: Mail not sent';
    }
} else {
    echo 'Error: Please fill in all required fields.';
}
?>