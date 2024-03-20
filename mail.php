<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendemail_verify($email, $token) {
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'your_email@gmail.com';
        $mail->Password   = 'your_email_password';
        $mail->SMTPSecure = 'tls';         
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom($email, 'Your Name');
        $mail->addAddress($email, 'Your Name');

        // Content
        $mail->isHTML(true);                                 
        $mail->Subject = 'Please verify your email address';
        $mail->Body    = "Please click on the following link to verify your email address: <a href='http://localhost/phplogin/verify.php?email=$email&token=$token'>Verify Email</a>";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Example usage
sendemail_verify('suelaralphkerby@gmail.com', '52e04471e4e21676f6d65313233343536');
?>