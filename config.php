<?php
require_once 'controller/connect.php';
require_once 'PHPMailer/PHPMailerAutoload.php';

define('APP_URL', 'http://localhost/ticketforus');
define('EMAIL_USERNAME', '');
define('EMAIL_ADDRESS', '');
define('EMAIL_APSSWORD', '');


function sendMail( $to, $subject = '', $message = '') {

        
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
         
        $mail->Username = EMAIL_USERNAME;
        $mail->Password = EMAIL_APSSWORD;
        $mail->From = EMAIL_ADDRESS;
//      $mail->FromName = '';
//      $replyto = '';
//      $replytonam = '';       
        // Local
        // $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
        $mail->SMTPSecure = 'tls';
        //$mail->SMTPDebug = 2;
        //$mail->AddReplyTo($replyto, $replytoname);

        /*
        $cc_addr = '';
        if ($cc_addr) {
            $cc_addr = explode(',', $cc_addr);
            foreach ($cc_addr as $cc) {
                $mail->addCC($cc);
            }
        } */

        $to_addr = explode(',', $to);
        foreach ($to_addr as $addr) {
            $mail->addAddress($addr);
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        if ($mail->send()) {
            return 1;
        }  else {
            return 0;
        }
        
    }