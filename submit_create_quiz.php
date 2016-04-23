
<?php

// used to login to the database
require_once("util/database.php");

// attributes for this item
$quizTitle = $_POST["quizTitle"];
$quizTries  = $_POST["quizTries"];
$quizDueDate = $_POST["quizDueDate"];
$quizID = $_POST["quizID"];

session_start();
$managerID = $_SESSION["managerID"];
var_dump($_POST);
$date = date('Y-m-d H:i:s', strtotime($quizDueDate));
$questions = "";

if(isset($_POST["select_manual"])) {
	foreach($_POST["plu_code"] as $code) {
		$questions .= $code . ",";
	}
	$questions = rtrim($questions, ",");
}

if(isset($_POST["quizID"])) {
	$query = sprintf("UPDATE quiz SET managerID='%d', name='%s', dueDate='%s', numTries='%d', questions='%s' WHERE quizID='%d';", $managerID, mysql_real_escape_string($quizTitle), $date, $quizTries, $questions, $quizID);
} else {
	$query = sprintf("INSERT INTO quiz(managerID, name, dueDate, questions, numTries) 
                           VALUES('%d', '%s', '%s', '%s', '%d')", $managerID, mysql_real_escape_string($quizTitle), $date, $questions, $quizTries);
}

mysql_query($query);
header( 'Location: manager_dashboard.php' ) ;
exit();

?>