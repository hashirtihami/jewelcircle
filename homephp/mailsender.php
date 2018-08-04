<?php
require'phpmailer/PHPMailerAutoload.php';
	$mail= new PHPMailer();
	//$mail->SMTPDebug =4;
	$mail->isSMTP();
	$mail->Host='smtp.gmail.com';
	$mail->SMTPAuth=true;
	$mail->Username='jewel.circle.o@gmail.com';
	$mail->Password='j3w3lcircl3';
	$mail->SMTPSSecure ='ssl';
	$mail->Port = '587';
	$mail->isHTML();
	$mail->setFrom('no-reply@jewelcircle.net');
	$mail->AddAddress($_POST['email']);
	$mail->isHTML(true);

	$mail->Subject= $subject;
	$mail->Body=  $message_body ;
	//$mail->addAttachment('../assets/images/posters/about.jpg','image.jpg');

	$mail->Send();
	/*
	if(!$mail->send()){
		echo 'MESSAGE COULDNT BE SENT';
		echo 'Mailer ERror:'. $mail->ErrorInfo;
	}else{
		echo 'Message Has been Sent';
	}*/
?>