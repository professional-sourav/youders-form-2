<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (!empty($_POST['EMAIL'])){

require_once 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'sourav@cyberizegroup.com';
    $mail->Password = 'CyberizeTeam$$20196';


    $mail->setFrom("support@cyberizegroup.com", "CyberizeGroup");
    $mail->addAddress('support@cyberizegroup.com', 'Request A FREE Estimate');

    $mail->isHTML(true);
    $mail->Subject='Form Submission:';
    $mail->Body='<h1>Name :' . $_POST['FULLNAME'] . '<br>Phone Number: ' . $_POST['PHONE']. '<br>Email: ' . $_POST['EMAIL'] . '</h1>';

    $mail->send();
    echo 'Message has been sent!';

    } catch(Exception $e){

        echo "Message could not be sent! Error: {$mail->ErrorInfo}";
    }
}
