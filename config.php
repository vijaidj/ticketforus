<?php
// require_once 'controller/connect.php';
require_once 'PHPMailer/PHPMailerAutoload.php';

define('APP_URL', 'http://localhost/ticketforus');
define('EMAIL_USERNAME', 'Rajkumar');
define('EMAIL_ADDRESS', 'rajworldmoorthi@gmail.com');
define('EMAIL_PASSWORD', 'findme@1991');
define("ENCRYPTION_KEY", "vj!@#$%^&*");
define("ENCRYPTION_IV", "vj!@#$%^&*");


function sendMail( $to, $subject = '', $message = '') {
	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or  465
	$mail->IsHTML(true);
	$mail->Username = EMAIL_ADDRESS;
	$mail->Password = EMAIL_PASSWORD;
	$mail->SetFrom(EMAIL_ADDRESS);
	$mail->Subject = $subject;
	$mail->Body = $message;
	// $mail->AddAddress($to);
	$to_addr = explode(',', $to);
	foreach ($to_addr as $addr) {
		$mail->addAddress($addr);
	}

	 if(!$mail->Send()) {
		return 0;
	 } else {
		return 1;
	 }
        
    }