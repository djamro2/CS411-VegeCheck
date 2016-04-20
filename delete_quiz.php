
<?php

// used to login to the database
require_once("util/database.php");

// attributes for this item
$quizId = $_POST["quizId"];

//Insert the image name and image content in image_table
$delete_quiz = sprintf("DELETE FROM quiz WHERE quizID = %d", $quizId);

$query_result = mysql_query($delete_quiz);

if ($query_result == false) {
    echo "Delete quiz failed";
} else {
    header("Location: quiz_overview_all.php");
    exit();
}

?>
