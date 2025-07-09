<?php
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];


require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

try{
$mail->isSMTP();
$mail->SMTPAuth =true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "leviurrutia2@gmail.com";
$mail->Password = "axte msjj pfor klsl";

$mail->setFrom($email, $name);
$mail->addAddress("leviurrutia2@gmail.com", "levi");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";
}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>