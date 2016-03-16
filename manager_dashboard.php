
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
    <script type="text/javascript" src="/scripts/app.js"></script>
    <script type="text/javascript" src="/scripts/ManagerDashboardCtrl.js"></script>

    <title>VegeCheck</title>
</head>

<body ng-controller="ManagerDashboardController" ng-app="VegeCheck" style="background: #F5F5F5!important;">

    <div class="content-container" layout="row" layout-align="center center">

        <div class="login-container md-whiteframe-12dp" layout="column">
            <md-content flex 
                        layout="column" 
                        layout-align="start center"
                        layout-padding>
                
                <h2>Manager Dashboard</h2>

                <div class="manager-options" layout="row" layout-align="space-around center">

                    <div class="manager-action" ng-click="goTo('/quiz_overview_all.php')" layout="column" layout-align="none center">

                        <div flex>
                            <img class="manager-action-img" ng-src="https://www.wpclipart.com/office/supplies/paper/clipboard.png" />
                        </div>

                        <p>View all Quizzes</p>

                    </div>
                    
                    <div class="manager-action" ng-click="goTo('/create_quiz.php')">

                        <div flex>
                            <img class="manager-action-img" ng-src="http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-10/256/Test-paper-icon.png" />
                        </div>

                        <p>Create Quiz</p>

                    </div>
            
                    <div class="manager-action" ng-click="goTo('/add_plu_item.php')">

                        <div flex>
                            <img class="manager-action-img" ng-src="http://www.gourmetegypt.com/media/catalog/product/p/e/pear-imported-united_1.jpg" />
                        </div>

                        <p>Add PLU Item</p>

                    </div>

                </div>

            </md-content>
        </div>


    </div>

</body>

</html>


