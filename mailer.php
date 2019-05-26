<?php

$arr = array('United Arab Emirates',
'Pakistan',
'London',
'Srilanka', 
'Qatar',
'Ireland',
'Scotland',
'India',
'Spain',
'Saudi Arabia');
$temp = sort($arr);
print_r($arr);

<option value="India">India</option>
<option value="Ireland">Ireland</option>
<option value="London">London</option>
<option value="Pakistan">Pakistan</option>
<option value="Qatar">Qatar</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Scotland">Scotland</option>
<option value="Spain">Spain</option>
<option value="Ireland">Ireland</option>


exit;
// require_once 'controller/connect.php';
require_once 'PHPMailer/PHPMailerAutoload.php';

define('APP_URL', 'http://localhost/ticketforus');
define('EMAIL_USERNAME', 'Rajkumar');
define('EMAIL_ADDRESS', 'rajworldmoorthi@gmail.com');
define('EMAIL_PASSWORD', 'findme@1991');
define("ENCRYPTION_KEY", "vj!@#$%^&*");
define("ENCRYPTION_IV", "vj!@#$%^&*");


print_r(sendMail('rajmoorthy91@gmail.com','subject',$template)); 
function sendMail( $to, $subject = '', $message = '') {
	
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or  465
$mail->IsHTML(true);
$mail->Username = 'rajworldmoorthi@gmail.com';
$mail->Password = 'findme@1991';
$mail->SetFrom("rajkumar@gmail.com");
$mail->Subject = "Test";
$mail->Body = $message;
// $mail->AddAddress($to);
$to_addr = explode(',', $to);
foreach ($to_addr as $addr) {
	$mail->addAddress($addr);
}

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
 
 
        
        // $mail = new PHPMailer;
        // $mail->isSMTP();		
		// $mail->SMTPAuth = true;
        // $mail->Host = 'smtp.gmail.com'; 
		// $mail->Port = 465; // or 587
		// $mail->IsHTML(true);
        
         
        // $mail->Username = EMAIL_USERNAME;
        // $mail->Password = EMAIL_PASSWORD;
        // $mail->From = EMAIL_ADDRESS;
		
// //      $mail->FromName = '';
// //      $replyto = '';
// //      $replytonam = '';       
        // // Local
        // // $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
        // $mail->SMTPSecure = 'tls';
        // $mail->SMTPDebug = 1;
        // //$mail->AddReplyTo($replyto, $replytoname);

        // /*
        // $cc_addr = '';
        // if ($cc_addr) {
            // $cc_addr = explode(',', $cc_addr);
            // foreach ($cc_addr as $cc) {
                // $mail->addCC($cc);
            // }
        // } */

        // $to_addr = explode(',', $to);
        // foreach ($to_addr as $addr) {
            // $mail->addAddress($addr);
        // }

        
        // $mail->Subject = $subject;
        // $mail->Body = $message;

        // if ($mail->send()) {
            // return 1;
        // }  else {
			// echo "Mailer Error: " . $mail->ErrorInfo;exit;
            // return 0;
        // }
        
    }