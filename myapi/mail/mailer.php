<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mailer = new PHPMailer();


//SMTP Configuration
$mailer->isSMTP();
$mailer->SMTPAuth = true; //We need to authenticate
$mailer->AuthType = 'LOGIN';
$mailer->Host = 'smtp.gmail.com';
$mailer->Mailer = "smtp";
//$mailer->AuthType = "login";
// $mailer->Host = gethostbyname('tls://mail.rudisa.net');
$mailer->Port = 587;
//
$mailer->Username = 'paycryptpenny@gmail.com';
$mailer->Password = 'd\u7A+u:zL';
$mailer->SMTPSecure = 'tls';

//Now, send mail :
//From - To :
$mailer->From = $from;
$mailer->FromName = $em_name; //Optional
$mailer->addAddress($to); // Add a recipient

//Subject - Body :
$mailer->Subject = $subject;
$mailer->Body = $html;
$mailer->isHTML(true); //Mail body contains HTML tags

//Check if mail is sent :
if(!$mailer->send()) {
//$data['message']= 'Problem sending mail. '. $mailer->ErrorInfo;
echo "error";
//echo json_encode($data);
} 
else {
//$cmodel->update_client_single_data($data['id'],'sent', 2);
//echo json_encode($data);
	echo "success";
}
?>