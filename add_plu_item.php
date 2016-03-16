
<!DOCTYPE html>
<html ng-app="VegeCheck">

<head>

    <!-- styles --> 
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
    <link href="styles/styles.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'>
    
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

    <title>VegeCheck</title>
</head>

<body ng-controller="AddPluController">

    <div id="container-all">

    <vegecheck-navbar></vegecheck-navbar>

    <div layout="column" layout-align="center center" class="addplu-wrapper" ng-cloak>

        <md-content layout-align="center center" layout-padding class="md-whiteframe-8dp component-content">

            <h2 class="addplu-text">Add PLU Item</h2>

            <div layout="column" layout-align="center center" class="component-wrapper">

                <form name="addPluForm" 
                      class="addPluForm"
                      method="POST" action="/submit_plu.php" enctype="multipart/form-data">

                <fieldset layout="column" layout-align="none center">

                <div class="addplu-input-group">

                <md-input-container class="pluItem-input">
                    <label>Title </label>
                    <input name="title" ng-model="pluItem.title">
                </md-input-container>
                
                <md-input-container class="pluItem-input">
                    <label>Code</label>
                    <input name="code" ng-model="pluItem.code">
                </md-input-container>

                <div class="input-file-row" layout="row" layout-align="start center" button-as-input>
                    <input type="file" id="hiddenFileInput" name="pluimage" 
                           ngf-select ng-model="image.file" 
                           size="31" required>
                </div>

                </div>

                <div layout="row" layout-align="center center">
                    <md-button id="addPluButton" 
                               class="md-raised md-primary" 
                               type="submit">Upload</md-button>
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

    <div class="footer">
        @2016 <a href="/">VegeCheck</a>, email: djamrozik96@gmail.com
    </div>

    </div>

</body>

</html>


