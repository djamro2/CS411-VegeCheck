<!DOCTYPE html>
<html ng-app="VegeCheck">

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

    <title>VegeCheck Quiz</title>
</head>

<body ng-controller="AddPluController">

    <vegecheck-navbar></vegecheck-navbar>

    <div id="page-wrap">

        <h1 class="center-text">PLU QUIZ</h1>
        
        <form action="score.php" method="post" id="quiz">

            <!-- init angular values from previous page-->
            <?php
                echo "<span ng-init=\"employeeId='" . $_POST["employeeId"] . "'; storeId='" . $_POST["storeId"] . "';\"></span>";
            ?>

            <ul class="quiz-question-list">

                <?php

                    require_once("util/database.php");

                    echo "<input type='hidden' name='storeId' value='" . $_POST["storeId"] . "' />";
                    echo "<input type='hidden' name='employeeId' value='" . $_POST["employeeId"] . "' />";

                    // TODO: get number from quiz parameters
                    $query = "SELECT * FROM plu ORDER BY RAND() LIMIT 5";
                    $result = mysql_query($query);

                    $i = 0;
                    while($row = mysql_fetch_assoc($result)) {

                        echo "<li class='quiz-item'>";
                        echo "<md-card>";
                        echo "<md-card-title>";
                        echo "<md-card-title-text>";

                        echo "<span class='md-headline'>" . $row["title"] . "</span>";
                        echo "<span class='md-subhead'>Question " . ($i + 1) . "</span>";
                        echo "</md-card-title-text>";
                        echo "<md-card-title-media>";

                        $i++;

                        echo "<div class=\"md-media-lg card-media\">";
                        echo "<img src=" . $row["image_url"] . " alt=\"Image cannot be displayed\">";
                        echo "</div>";
                        echo "</md-card-title-media>";
                        echo "</md-card-title>";

                        echo "<md-card-content class=\"quiz-card-content\">";
                        echo "<div layout=\"row\" layout-align=\"center center\">";
                        echo "<md-input-container class=\"pluItem-input quiz-answer-input\">";
                        echo "<label>Answer</label>";
                        echo "<input name='response[]' ng-model='answer" . $i . "' >";
                        echo "</md-input-container>";
                        echo "<input type=\"hidden\" name=\"answer[]\" value=\"" . $row["pluID"] . "\"/>";
                        echo "</div>";
                        echo "</md-card-content>";

                        echo "</md-card>";
                        echo "</li>";

                    }

                ?>
            
            </ul>

            <div class="quiz-submit-button">
                <md-button class="md-raised md-primary" type="submit">Submit Quiz</md-button>
            </div>

        </form>
    
    </div>

</body>

</html>