
app.controller('AddPluController', ['$scope', '$window', function($scope, $window) {

    var vm = this;

    // checkboxes for create_quiz
    $scope.select_random_five = true;
    $scope.select_manual = false;

    // plu items fro create_quiz
    $scope.pluItems = [];

    // first plu item
    $scope.pluItems.push({
        code: '',
        item_num: 0,
        next_item: -1
    });


    /*
     * Called after controller is completely loaded
     */
    vm.init = function() {

    };

    /*
     * If the current input is focused on and the next one does not exist yet, add a new item to array
     */
    $scope.addPluItem = function(current_plu) {

        console.log("focused on this element");

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

    vm.init();

}]);

