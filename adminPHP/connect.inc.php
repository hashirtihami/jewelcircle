<?php

	$mysql_host = 'localhost';
	$mysql_username = 'alex';
	$mysql_pass = '';

	$mysql_db = 'test-jc';

	if(!@mysqli_connect($mysql_host, $mysql_username, $mysql_pass)||@mysqli_select_db($mysql_db)){
		die('Connection Error');
	}

?>