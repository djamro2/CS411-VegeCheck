
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
    <script type="text/javascript" src="scripts/AddPluCtrl.js"></script>

    <title>VegeCheck</title>
</head>

<body ng-controller="AddPluController" style="background: #F5F5F5!important;">

    <div class="content-container" layout="row" layout-align="center center">

        <div class="login-container md-whiteframe-12dp" layout="column">
            <md-content flex 
                        layout="column" 
                        layout-align="start center"
                        layout-padding>
                
                <h2>Manager Login</h2>

                <form action="submit_login.php" 
                      method="post"
                      flex layout="column"
                      layout-align="start center">

                    <md-input-container class="input-wide">
                        <label>username</label>
                        <input type="text" name="username">
                    </md-input-container>

                    <md-input-container class="input-wide">
                        <label>password</label>
                        <input type="password" name="password">
                    </md-input-container>
                        
                    <md-button type="submit" class="md-raised md-primary login-button">Login</md-button>

                    <p ng-if="getParam('loginFailed')" class="login-error">Incorrect username or password</p>

                </form>

            </md-content>
        </div>


    </div>

</body>

</html>


