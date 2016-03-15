
<!DOCTYPE html>
<html>

<head>
    
    <link href="styles/styles.css" rel="stylesheet" />
    
    <!-- Angular Material style sheet -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">

    <title>VegeCheck</title>
</head>

<body ng-app="InventoryApp">

    <div class="content-container" layout="row" layout-align="center center">

        <div class="login-container md-whiteframe-12dp" layout="column">
            <md-content flex 
                        layout="column" 
                        layout-align="start center"
                        layout-padding>
                
                <h2>VegeCheck</h2>

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
                        <input type="text" name="password">
                    </md-input-container>
                        
                    <md-button type="submit" class="md-raised md-primary login-button">Login</md-button>

                </form>

            </md-content>
        </div>


    </div>

    <!-- Angular Material requires Angular.js Libraries -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>

    <!-- Angular Material Library -->
    <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>

    <!-- Your application bootstrap  -->
    <script type="text/javascript">    
        /**
          * You must include the dependency on 'ngMaterial' 
        */
        angular.module('InventoryApp', ['ngMaterial']);
    </script>

</body>

</html>


