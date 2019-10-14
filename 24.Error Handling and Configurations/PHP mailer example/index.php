<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer-master/src/Exception.php';
require 'vendor/PHPMailer-master/src/PHPMailer.php';
require 'vendor/PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);
try
{
	$mail->isSMTP();
	$mail->Host = 'your mail server';
	$mail->SMTPAuth = true;
	$mail->Username = 'username';
	$mail->Password = 'password';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->setFrom('from@example.com');
	$mail->addAddress('ellen@example.com');
	$mail->Subject = 'Here is the subject';
	$mail->Body = 'This is the HTML message body <b>in bold!</b>';

	$mail->send();

	echo "Message Sent";
}
catch(Exception $e)
{
	echo "Message not sent: ",$mail->errorInfo;
}
