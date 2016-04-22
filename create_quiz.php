
<!DOCTYPE html>
<html ng-app="VegeCheck">

<head>

    <!-- styles --> 
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
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

        <md-content layout-align="center center" layout-padding class="md-whiteframe-8dp component-content">

            <h2 class="addplu-text">Create New Quiz</h2>

            <div layout="column" layout-align="center center" class="component-wrapper">

                <form name="addPluForm"
                      class="addPluForm"
                      method="post" action="submit_create_quiz.php" enctype="multipart/form-data">

                    <fieldset layout="column" layout-align="none center">

                        <!-- hidden input, contains quiz Id -->
                        <input ng-if="getParam('quizId')" hide-gt-xs name="quizID" value="{{getParam('quizId')}}" />

                        <div class="addplu-input-group">

                            <div class="center-text">

                                <md-input-container class="pluItem-input">
                                    <label>Title </label>
                                    <input name="quizTitle" ng-model="quiz.title">
                                </md-input-container>

                                <md-input-container class="pluItem-input">
                                    <label>Number of Tries</label>
                                    <input name="quizTries" ng-model="pluItem.code">
                                </md-input-container>

                                <md-datepicker name="quizDueDate" ng-model="dueDate" md-placeholder="Due Date">
                                <input name="quizDueDate" ng-model="pluItem.dueDate">
                                </md-datepicker>

                                <div class="line"></div>

                                <p class="select-plu-text">
                                    Select PLU Items to Quiz
                                </p>

                            </div>

                            <md-checkbox ng-model="select_random_five" ng-click="select_manual = false">
                                Select 5 random PLU items
                            </md-checkbox> <br>

                            <md-checkbox ng-model="select_manual" ng-click="select_random_five = false">
                                Add PLU items manually
                            </md-checkbox> <br>

                            <div class="plu-item-list" ng-if="select_manual">

                                <div class="plu-item" ng-repeat="pluItem in pluItems">
                                    <md-input-container class="pluItem-input">
                                        <label>PLU Item {{$index + 1}}</label>
                                        <input ng-model="pluItem.code" ng-focus="addPluItem(pluItem)">
                                    </md-input-container>
                                </div>

                            </div>
                            
<!--                            --><?php
//								require_once("util/database.php");
//								$query = "SELECT DISTINCT category FROM plu LIMIT 10";
//								$result = mysql_query($query);
//								while($row = mysql_fetch_assoc($result)) {
//									echo "<md-checkbox name=\"cats\" value = \"" . $row["category"] . "\"aria-label=\"Checkbox 1\">" . $row["category"] . "</md-checkbox> <br/>";
//								}
//							?>

                        </div>

                        <div layout="row" layout-align="center center">
                            <md-button id="addPluButton"
                                       class="md-raised md-primary"
                                       type="submit">Create</md-button>
                        </div>


                    </fieldset>

                </form>

            </div>

        </md-content>

    </div>

</div>

</body>

</html>


