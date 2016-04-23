<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="VegeCheck">

<head>
	<!-- styles -->
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
	<link href="styles/quiz.css" rel="stylesheet" />
	<link href="styles/styles.css" rel="stylesheet" />

	<!-- Angular Libraries -->
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>

	<!-- Angular Material Library -->
	<script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>

	<!-- Angular Code -->
	<script type="text/javascript" src="/scripts/app.js"></script>
	<script type="text/javascript" src="/scripts/vegecheck-navbar.js"></script>
	<script type="text/javascript" src="/scripts/AddPluCtrl.js"></script>
	<script type="text/javascript" src="/scripts/Requests.js"></script>

	<title>Quiz Result</title>
</head>

<body ng-controller="AddPluController">

	<vegecheck-navbar></vegecheck-navbar>

	<div id="page-wrap">

		<h1 class="center-text">PLU QUIZ RESULT</h1>

		<md-content layout-padding class="md-whiteframe-8dp center-text">

			<br><br>
		
        <?php
			require_once("util/database.php");
            $responses = $_POST['response'];
			$answers = $_POST['answer'];
			$i = 0;
			$result = "";
			foreach( $responses as $resp ) {
				$resp = trim($resp);
				$ans = $answers[$i];
				$result .= $ans . ":";
				if($resp == $ans) {
					$totalCorrect++;
					$result .= "1";
				} else {
					$result .= "0";
					if ($resp != "0" && empty($resp)){
            			echo "You didn't select an answer for question " . ($i + 1) . "<br/><br/>";
            		} else if (!ctype_digit($resp)) {
						echo "Invalid response for question " . ($i + 1) . "<br /><br/>";
					} else {
						echo "Wrong answer for question " . ($i + 1) . "<br /><br/>";
					}
				}
				$result .= ",";
				$i++;
			}
			trim($result, ",");
            $percentage = ($totalCorrect / $i);
            echo "You received (", ($percentage * 100), "%)<br/><br/>";
            echo "You got $totalCorrect out of 5 questions correct";
            $query = sprintf("INSERT INTO score(quizID, storeID, employeeID, percentage, timeFinished, result)
                           VALUES('%d', '%d', '%d', '%f', now(), '%s')", $_POST["quizID"], $_POST['storeID'], $_POST['employeeID'], $percentage, mysql_real_escape_string($result));
			mysql_query($query);
        ?>

			<br/><br/>

		</md-content>
	
	</div>

</body>

</html>