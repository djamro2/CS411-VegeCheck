<?php
$host = "mysql4.000webhost.com";
	$user = "a6322361_user";
	require_once("password.php");
	$dbname = "a6322361_data";
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$connection = mysql_connect($host, $user, $pass);
	mysql_select_db($dbname) or die("Unable to select database");
    ?>