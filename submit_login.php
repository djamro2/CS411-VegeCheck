
<?php

	require_once("util/database.php");
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$query = sprintf("SELECT * FROM manager WHERE username='%s' AND password=PASSWORD('%s')", mysql_real_escape_string($username), mysql_real_escape_string($password));
	$result = mysql_query($query);

    if (mysql_num_rows($result) > 0) {
		session_start();
		$_SESSION["managerUsername"] = mysql_result($result, 0, "username");
		$_SESSION["managerID"] = mysql_result($result, 0, "managerID");
		
        header("Location: /manager_dashboard.php");
        die();
    } else {
        header("Location: /login.php?loginFail=true");
        die();
    }

?>

