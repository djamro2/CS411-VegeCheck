
app.controller('AddPluController', ['$scope', '$window', function($scope, $window) {

    var vm = this;

    /*
     * Called after controller is completely loaded
     */
    vm.init = function() {

    };

    /*
     * Simple helper function, go to the url passed in
     */
    $scope.goTo = function(url) {
        $window.location.href = url;
    };

    vm.init();

}]);

