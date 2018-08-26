<?php
/* Database connection settings */
$host = 'localhost';
$user = 'wet';
$pass = 'STRONGESTpassword123';
$db = 'test-jc';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
