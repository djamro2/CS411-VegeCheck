<!DOCTYPE html>
<html ng-app="VegeCheck">

<head>

    <!-- styles -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/scripts/md-data-table.min.css">
    <link href="styles/styles.css" rel="stylesheet" />

    <!-- Angular Libraries -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
    <script src="/scripts/md-data-table.min.js"></script>

    <!-- Angular Material Library -->
    <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>

    <!-- Angular Code -->
    <script type="text/javascript" src="/scripts/app2.js"></script>
    <script type="text/javascript" src="/scripts/vegecheck-navbar.js"></script>
    <script type="text/javascript" src="/scripts/AddPluCtrl.js"></script>

    <title>Quiz Overview</title>

</head>

<body ng-controller="AddPluController">

<div id="container-all">

    <vegecheck-navbar></vegecheck-navbar>

    <div layout="column" layout-align="center center" class="addplu-wrapper" ng-cloak>

        <md-content layout-align="center center" layout-padding class="md-whiteframe-8dp component-content quiz-overview-content">

            <h2 class="addplu-text" style="margin-bottom: 0;">Latest Quiz Scores</h2>

            <a href="/display_cheaters.php" class="center-text">
                <h6 style="margin: 0;">(display cheaters)</h6>
            </a>

            <div layout="column" layout-align="center center" class="component-wrapper">

                <md-table-container>

                    <table md-table>

                        <thead md-head>

                            <tr md-row>
                                <th md-column><span>Quiz Name</span></th>
                                <th md-column><span>Employee ID</span></th>
                                <th md-column><span>Score</span></th>
                            </tr>

                        </thead>

                        <tbody md-body>


                        <?php

                            require_once("util/database.php");

                            $query = "SELECT * FROM score JOIN quiz ON score.quizID = quiz.quizID ORDER BY score.scoreID DESC";
                            $result = mysql_query($query);

                            while($row = mysql_fetch_assoc($result)) {

                                echo "<tr md-row>";
                                echo "<td md-cell>" . $row["name"] . "</td>";
                                echo "<td md-cell>" . $row["employeeID"] . "</td>";
                                echo "<td md-cell>" . ($row["percentage"] * 100) ."%</td>";
                                echo "</tr>";

                            }

                        ?>
                            <!-- this is what needs to be repeated -->
                            <tr md-row >
                                <td md-cell>Some name of the quiz</td>
                                <td md-cell>23</td>
                                <td md-cell>100%</td>
                            </tr>

                        </tbody>

                    </table>

                </md-table-container>

            </div>

            <div flex layout="row" layout-align="end end" layout-padding>
                <md-button class="md-primary md-raised" ng-click="goTo('manager_dashboard.php')">Return to Dashboard</md-button>
            </div>

        </md-content>

    </div>

</div>

</body>

</html>
