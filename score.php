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
            
            $answer1 = isset($_POST['question-1-answers']) ? $_POST['question-1-answers']: '';
            if (empty($answer1)){
            	echo "You didn't select an answer for question 1<br/>";
            }
            $answer2 = isset($_POST['question-2-answers']) ? $_POST['question-2-answers']: '';
            if (empty($answer2)){
            	echo "You didn't select an answer for question 2<br/>";
            }
            $answer3 = isset($_POST['question-3-answers']) ? $_POST['question-3-answers']: '';
            if (empty($answer3)){
            	echo "You didn't select an answer for question 3<br/>";
            }
            $answer4 = isset($_POST['question-4-answers']) ? $_POST['question-4-answers']: '';
            if (empty($answer4)){
            	echo "You didn't select an answer for question 4<br/>";
            }
            $answer5 = isset($_POST['question-5-answers']) ? $_POST['question-5-answers']: '';
            if (empty($answer5)){
            	echo "You didn't select an answer for question 5<br/>";
            }

        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5) { $totalCorrect++; }
            
            $percentage = ($totalCorrect/5)*100;
            echo "You received (", $percentage, "%)<br/>";
            echo "You got $totalCorrect out of 5 questions correct";
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>