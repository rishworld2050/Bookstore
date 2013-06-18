<?php
require("scripts/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();    // set mailer to use SMTP
$mail->Host = "mail.authsmtp.com";    // specify main and backup server
$mail->SMTPAuth = true;    // turn on SMTP authentication
$mail->Username = "USERNAME";    // SMTP username -- CHANGE --
$mail->Password = "PASSWORD";    // SMTP password -- CHANGE --
$mail->Port = "25";    // SMTP Port

$mail->From = "you@yourdomain.com";    //From Address -- CHANGE --
$mail->FromName = "Your Company Name";    //From Name -- CHANGE --
$mail->AddAddress("rishabh@localhost", "Example");    //To Address -- CHANGE --
$mail->AddReplyTo("you@yourdomain.com", "Your Company Name"); //Reply-To Address -- CHANGE --

$mail->WordWrap = 50;    // set word wrap to 50 characters
$mail->IsHTML(false);    // set email format to HTML

$mail->Subject = "AuthSMTP Test";
$mail->Body    = "AuthSMTP Test Message!";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>