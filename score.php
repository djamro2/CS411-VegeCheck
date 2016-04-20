<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>VegeCheck Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/quiz.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>PLU QUIZ RESULT</h1>
		
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
            			echo "You didn't select an answer for question " . ($i + 1) . "<br/>";
            		} else if (!ctype_digit($resp)) {
						echo "Invalid response for question " . ($i + 1) . "<br />";
					} else {
						echo "Wrong answer for question " . ($i + 1) . "<br />";
					}
				}
				$result .= ",";
				$i++;
			}
			trim($result, ",");
            $percentage = ($totalCorrect / $i);
            echo "You received (", ($percentage * 100), "%)<br/>";
            echo "You got $totalCorrect out of 5 questions correct";
            $query = sprintf("INSERT INTO score(storeID, employeeID, percentage, timeFinished, result) 
                           VALUES('%d', '%d', '%f', now(), '%s')", $_POST['storeID'], $_POST['employeeID'], $percentage, mysql_real_escape_string($result));
			mysql_query($query);
        ?>
	
	</div>

</body>

</html>