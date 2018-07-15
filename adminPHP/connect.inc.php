<?php

	$mysql_host = 'localhost';
	$mysql_username = 'root';
	$mysql_pass = '';

	$mysql_db = 'test-jc';
	$conn = mysqli_connect($mysql_host, $mysql_username, $mysql_pass, $mysql_db);
	
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

?>