<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create the message body (you might want to use a template engine for more complex templates)
    $message_body = file_get_contents('message.html');
    $message_body = str_replace(['[Name]', '[Email]', '[Message]'], [$name, $email, $message], $message_body);

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;  // Reduced debugging
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'no-reply@balmoralfamilyadventure.press';
    $mail->Password = 'TbFQT4uN@p:Rfms';
    $mail->setFrom('no-reply@balmoralfamilyadventure.press', 'Contact Form');
    $mail->addReplyTo('contact@balmoralfamilyadventure.press', 'Rainbow Story System');
    $mail->addAddress('contact@balmoralfamilyadventure.press', 'Rainbow Story System');
    $mail->Subject = 'New Contact Form Submission';  // Updated subject
    $mail->msgHTML($message_body, __DIR__);

    if (!$mail->send()) {
        // Redirect with error
        header('Location: contact.php?status=error&message=' . urlencode($mail->ErrorInfo));
        exit;
    } else {
        // Redirect with success
        header('Location: contact.php?status=success');
        exit;
    }
} else {
    echo "This script only accepts POST requests.";
}
?>