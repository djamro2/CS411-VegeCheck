
app.controller('AddPluController', ['$scope', '$window', '$http', function($scope, $window, $http) {

    var vm = this;

    // checkboxes for create_quiz
    $scope.select_random_five = true;
    $scope.select_manual = false;

    // plu items fro create_quiz
    $scope.pluItems = [1,2,3,4,5];

    // answers in the taking_quiz page
    $scope.answers = [];

    $scope.quizQuery = {
        limit: 5,
        page: 1
    };

    /*
     * Called after controller is completely loaded
     */
    vm.init = function() {

    };

    /*
     * Given that a new answer, was given update that in the answers[] array or create a new item
     */
    $scope.addAnswer = function(given_answer, pluID) {

        // first check to see if it already exists
        for (var i = 0; i < $scope.answers.length; i++) {

            if ($scope.answers[i].pluID === pluID) {
                $scope.answers[i].given_answer = given_answer;
                return;
            }

        }

        // add new item
        $scope.answers.push({
            pluID: pluID,
            given_answer: given_answer
        });

    };

    /*
     * If the current input is focused on and the next one does not exist yet, add a new item to array
     */
    $scope.addPluItem = function(current_plu) {

        if (current_plu.next_item === -1){

            // add the new item
            var new_item = {
                code: '',
                item_num: $scope.pluItems.length,
                next_item: -1
            };
            $scope.pluItems.push(new_item);

            // set the next item of the current
            current_plu.next_item = new_item.item_num;

        }

    };

    /*
     * Pass in a field and return the value of that parameter
     */
    $scope.getParam = function(paramName) {

        function getQueryParams(qs) {
            qs = qs.split('+').join(' ');

            var params = {},
                tokens,
                re = /[?&]?([^=]+)=([^&]*)/g;

            while (tokens = re.exec(qs)) {
                params[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2]);
            }

            return params;
        };

        var params = getQueryParams(document.location.search);

        if (!params) {
            return false;
        }

        return params[paramName];
    };

    /*
     * Simple helper function, go to the url passed in
     */
    $scope.goTo = function(url) {
        $window.location.href = url;
    };

    /*
     * Final function on the taking_quiz page, send the answers, employeeID, and storeID to the back end
     */
    $scope.submitAnswers = function() {

        var request = $http({
            method: "post",
            url: "/score.php",
            data: {
                storeId: $scope.storeId,
                employeeId: $scope.employeeId,
                answers: $scope.answers
            },
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        });

        request.success(function(data){

        });

    };

    vm.init();

}]);

