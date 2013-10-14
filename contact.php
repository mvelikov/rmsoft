<?php

header('Location: http://rm-software.net');
ini_set('display_errors', 'On');
if (!empty($_POST['name']) && trim($_POST['name']) != ''
	&& !empty($_POST['email']) && trim($_POST['email']) != ''
	&& !empty($_POST['message']) && trim($_POST['message']) != '') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = 'Name: ' . $name . "\r\n" .
	'Email: ' . $email . "\r\n" . 
	'Message: ' . $_POST['message'];
	//$message = wordwrap($message, 70, "\r\n");

	require_once 'swift/lib/swift_required.php';

	$transport = Swift_SmtpTransport::newInstance(getenv('MAILGUN_SMTP_SERVER'), getenv('MAILGUN_SMTP_PORT'))
	->setUsername(getenv('MAILGUN_SMTP_LOGIN'))
	->setPassword(getenv('MAILGUN_SMTP_PASSWORD'));

	$mailer = Swift_Mailer::newInstance($transport);
	// Create a message
	$mail = Swift_Message::newInstance('RM Software Contact')
	->setFrom(array('no-replay@rm-software.net' => 'RM Software'))
	->setTo(array('mihailvelik@gmail.com'))
	->setBody($message);
	// Send the message
	$result = $mailer->send($mail);
	if ($result)
		die('1');
}
die();
