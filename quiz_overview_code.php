<?php
// include "quiz_overview_code.php"
	require_once("util/database.php");
	$query = sprintf("SELECT * FROM quiz ORDER BY quizID DESC");
	$result = mysql_query($query);
	
	if(mysql_num_rows($result) > 0) {
		while($row = mysql_fetch_assoc($result)) {
			echo "<md-list-item layout=\"row\" layout-align=\"none center\">" . 
                        "<a class='title-link' href='taking_quiz_start.php?quizId=" . $row["quizID"] . "'><span class='quiz-title'>" . $row["name"] . "</span></a>" .
                        "<span flex></span>" . 
                        "<i class=\"material-icons settings-icon\" ng-click=\"goTo('create_quiz.php?quizId=" . $row["quizID"] . "')\">build</i>" .
                        "<form method=\"POST\" action=\"delete_quiz.php\">" .
                            "<input hide-gt-xs name=\"quizId\" value=\"" . $row["quizID"] . "\" />" .
                            "<button class=\"delete-button\">" . 
                                "<i type=\"submit\" class=\"material-icons\">delete</i>" .
                            "</button>" .
                        "</form>" .
                    "</md-list-item>" .

                    "<md-divider></md-divider>";
		}
	} else {
		echo "0 results";
	}
?>