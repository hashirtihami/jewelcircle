<?php
require'PHPMailerAutoload.php';



	$mail= new PHPMailer();
	$mail->SMTPDebug =4;
	$mail->isSMTP();
	$mail->Host='smtp.gmail.com';
	$mail->SMTPAuth=true;
	$mail->Username='jewel.circle.o@gmail.com';
	$mail->Password='j3w3lcircl3';
	$mail->SMTPSSecure ='ssl';
	$mail->Port = '587';
	$mail->isHTML();
	$mail->setFrom(EMAIL, 'JEWEL CIRCLE');
	$mail->AddAddress('hashirtihamipk@gmail.com');
	$mail->addReplyTo(EMAIL);
	$mail->isHTML(true);
	$mail->Subject= 'chal ja plis';
	$mail->Body= ' plis plis plis ';
	if(!$mail->send()){
		echo 'MESSAGE COULDNT BE SENT';
		echo 'Mailer ERror:'. $mail->ErrorInfo;
	}else{
		echo 'Message Has been Sent';
	}
	$mail->Send();

?>