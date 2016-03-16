<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "cs411_vegecheck";


$connect = mysqli_connect($db_host, $db_username, $db_password, $db_name ) or die ("Could not connect to MySQL");

mysqli_select_db($connect, "$db_name") or die ("No database");

if ($connect){
	echo "Successful Connection";
}else{
	echo "Failed Connection";
}

?>