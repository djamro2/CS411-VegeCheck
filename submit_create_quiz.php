
<?php

// used to login to the database
require("util/database.php");

// attributes for this item
$quizTitle = $_POST["quizTitle"];
$quizTries  = $_POST["quizTries"];
$quizDueDate = $_POST["quizDueDate"];

session_start();
$managerID = $_SESSION["managerID"];
echo "Hey";
echo "<br />";
echo $quizDueDate;
echo "<br />";
echo date('Y-m-d H:i:s', strtotime($quizDueDate));

//Insert the image name and image content in image_table
$insert_image=sprintf("INSERT INTO quiz(managerID, name, dueDate, numTries) 
                           VALUES('%d', '%s', '%s', '%d')", $managerID, mysql_real_escape_string($quizTitle), date('Y-m-d H:i:s', strtotime($quizDueDate)), $quizTries);

mysql_query($insert_image);

?>