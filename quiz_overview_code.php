<?php
// include "quiz_overview_code.php"
	require("util/database.php");
	$query = sprintf("SELECT * FROM quiz");
	$result = mysql_query($query);
	
	if(mysql_num_rows($result) > 0) {
		while($row = mysql_fetch_assoc($result)) {
			echo $row["managerID"] . ":" . $row["name"] . "<br />";
		}
	} else {
		echo "0 results";
	}
?>