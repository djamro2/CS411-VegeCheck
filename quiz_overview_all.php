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
    <script type="text/javascript" src="scripts/app.js"></script>
    <script type="text/javascript" src="scripts/vegecheck-navbar.js"></script>
    <script type="text/javascript" src="scripts/AddPluCtrl.js"></script>

    <title>VegeCheck</title>
</head>

<body ng-controller="AddPluController">

<div id="container-all">

    <vegecheck-navbar></vegecheck-navbar>

    <div layout="column" layout-align="center center" class="addplu-wrapper" ng-cloak>

        <md-content layout-align="center center" layout-padding class="md-whiteframe-8dp component-content quiz-overview-content">

            <h2 class="addplu-text">View All Quizzes</h2>

            <div layout="column" layout-align="center center" class="component-wrapper">

                <!-- current quizzes -->
                <md-list class="quiz-list md-white-frame-2dp">
                    <md-subheader class="md-no-sticky">Current Quizzes</md-subheader>
					<?php include "quiz_overview_code.php" ?>

                </md-list>

                <!-- old quizzes -->
                <md-list class="quiz-list md-white-frame-2dp">
                    <md-subheader class="md-no-sticky">Expired Quizzes</md-subheader>

                    <md-list-item layout="row" layout-align="none center">
                        <span>Expired Quiz #1</span>
                        <span flex></span>
                        <i class="material-icons settings-icon" ng-click="goTo('create_quiz.php?quizId=1')">build</i>
                        <form method="POST" action="delete_quiz.php">
                            <input hide-gt-xs name="quizId" value="1" />
                            <button class="delete-button">
                                <i type="submit" class="material-icons">delete</i>
                            </button>
                        </form>
                    </md-list-item>

                    <md-divider></md-divider>

                    <md-list-item layout="row" layout-align="none center">
                        <span>Expired Quiz #1</span>
                        <span flex></span>
                        <i class="material-icons settings-icon" ng-click="goTo('create_quiz.php?quizId=1')">build</i>
                        <form method="POST" action="delete_quiz.php">
                            <input hide-gt-xs name="quizId" value="1" />
                            <button type=""submit" class="delete-button">
                                <i class="material-icons">delete</i>
                            </button>
                        </form>
                    </md-list-item>

                    <md-divider></md-divider>

                    <md-list-item layout="row" layout-align="none center">
                        <span>Expired Quiz #1</span>
                        <span flex></span>
                        <i class="material-icons settings-icon" ng-click="goTo('create_quiz.php?quizId=1')">build</i>
                        <form method="POST" action="delete_quiz.php">
                            <input hide-gt-xs name="quizId" value="1" />
                            <button class="delete-button">
                                <i type="submit" class="material-icons">delete</i>
                            </button>
                        </form>
                    </md-list-item>

                </md-list>

            </div>

            <div flex layout="row" layout-align="end end" layout-padding>
                <md-button class="md-primary md-raised" ng-click="goTo('manager_dashboard.php')">Return to Dashboard</md-button>
            </div>

        </md-content>

    </div>
    
</div>

</body>

</html>


				