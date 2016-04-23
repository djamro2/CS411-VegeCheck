
<?php
$quizId = $_GET["quizId"];
?>

<!DOCTYPE html>

<html ng-app="VegeCheck">

<head>

    <!-- styles -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

    <title>Take Quiz</title>
</head>

<body>

<div id="container-all">

    <vegecheck-navbar></vegecheck-navbar>

    <div layout="column" layout-align="center center" class="addplu-wrapper" ng-cloak>

        <md-content layout-align="center center" layout-padding class="md-whiteframe-8dp component-content quiz-overview-content start-quiz-components">

            <h2 class="addplu-text">Employee Info</h2>

            <form method="POST" action="taking_quiz.php">

                <div layout="column" layout-align="center center" class="component-wrapper">

                    <md-input-container class="pluItem-input">
                        <label>Employee ID</label>
                        <input name="employeeId" ng-model="employeeId">
                    </md-input-container>

                    <md-input-container class="pluItem-input">
                        <label>Store ID</label>
                        <input name="storeId" ng-model="storeId">
                    </md-input-container>

                    <!-- hidden input with the quizId-->
                    <?php
                        echo "<input type='hidden' name='quizId' value='" . $quizId . "'>";
                    ?>

                    <div layout="row" layout-align="center center">
                        <md-button class="md-raised md-primary"
                                   type="submit">Start Quiz</md-button>
                    </div>

                </div>

            </form>

        </md-content>

    </div>

</div>

</body>

</html>
