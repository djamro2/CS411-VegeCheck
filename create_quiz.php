
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

                        <div class="addplu-input-group">

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

                            <br/>
                            <p style="padding-top: 1.25rem;">Select PLU Items</p>

                            <md-checkbox name="apple" aria-label="Checkbox 1">
                                Apple
                            </md-checkbox> <br/>

                            <md-checkbox name="pear" aria-label="Checkbox 1">
                                Pear
                            </md-checkbox> <br/>

                            <md-checkbox name="banana" aria-label="Checkbox 1">
                                Banana
                            </md-checkbox>

                        </div>

                        <div layout="row" layout-align="center center">
                            <md-button id="addPluButton"
                                       class="md-raised md-primary"
                                       type="submit">Create</md-button>
                        </div>

                        <div layout="row" layout-align="center center">
                            <p ng-if="errorMessage && !successMessage" class="bottom-message red">{{errorMessage}}</p>
                            <p ng-if="successImageId && !errorMessage" class="bottom-message">
                                <span>Success! Item uploaded</span>
                            </p>
                        </div>

                    </fieldset>

                </form>

            </div>

        </md-content>

    </div>

</div>

</body>

</html>


