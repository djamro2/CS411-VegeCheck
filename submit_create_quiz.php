
<?php

// used to login to the database
require("util/database.php");

// attributes for this item
$quizTitle = $_POST["quizTitle"];
$quizTries  = $_POST["quizTries"];
$quizDueDate = $_POST["quizDueDate"];
$quizID = $_POST["quizID"];

session_start();
$managerID = $_SESSION["managerID"];
$date = date('Y-m-d H:i:s', strtotime($quizDueDate));

//Insert the image name and image content in image_table
if(isset($_POST["quizID"])) {
	$query = sprintf("UPDATE quiz SET managerID='%d', name='%s', dueDate='%s', numTries='%d' WHERE quizID='%d';", $managerID, mysql_real_escape_string($quizTitle), $date, $quizTries, $quizID);
} else {
	$query=sprintf("INSERT INTO quiz(managerID, name, dueDate, numTries) 
                           VALUES('%d', '%s', '%s', '%d')", $managerID, mysql_real_escape_string($quizTitle), $date, $quizTries);
}

mysql_query($query);
header( 'Location: manager_dashboard.php' ) ;
exit();

?>