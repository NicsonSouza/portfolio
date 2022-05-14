<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'lib/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = true;
    $mail->isSMTP(true);
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'samire.barreto@gmail.com';
    $mail->Password   = 'Souza@76';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->CharSet    = 'UTF-8';

    //Recipients
    $mail->setFrom('samire.barreto@gmail.com', 'Samire Barreto');
    $mail->addAddress('nick.nicson@gmail.com', 'Nicson Nascimento');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'VSC';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Email enviado';
} catch (Exception $e) {
    echo "Email não enviado. Mailer Error: {$mail->ErrorInfo}";
}