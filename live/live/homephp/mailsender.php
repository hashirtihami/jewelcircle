<?php
require'phpmailer/PHPMailerAutoload.php';
	$mail= new PHPMailer();
	//$mail->SMTPDebug =2;
	$mail->isSMTP();
	$mail->Host= 'sg2plcpnl0032.prod.sin2.secureserver.net';
	$mail->SMTPAuth=false;

	$mail->SMTPSSecure ='none';
	$mail->Port = '25';
	$mail->isHTML();
	$mail->setFrom('mail@jewelcircle.net', 'Jewel Circle');
	$mail->AddAddress($_POST['email']);
	$mail->isHTML(true);

	$mail->Subject= $subject;
	$mail->Body=  $message_body ;


	$mail->Send();

?>