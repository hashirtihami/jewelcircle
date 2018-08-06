<?php 
// Authorisation details. 
$username =  "jewel.circle.o@gmail.com";
$hash = "56c40b233ed429f077cbe90726553b81e43c1c443422a250f327130d2b5c0314";
// Config variables. Consult http://api.txtlocal.com/docs for more info. 
$test = "jewel circle"; 
// Data for text message. This is the text message data. 
$sender = "Jewel Circle"; // This is who the message appears to be from. 
$numbers = "";//$_POST['contact']; // A single number or a comma-seperated list of numbers 
$message = "Hello jee";//$_POST['msg']; 
// 612 chars or less 
// A single number or a comma-seperated list of numbers 
$message = urlencode($message); 
$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	echo($result); 

?>