<?php

	$host = "localhost";
	$user = "root";
	require_once("password.php");
	$dbname = "vegecheck";
	
	$connection = mysql_connect($host, $user, $pass);
	mysql_select_db($dbname) or die("Unable to select database");

?>