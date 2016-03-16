
app.controller('ManagerDashboardController', ['$scope', '$window', function($scope, $window) {

    var vm = this;

    /*
     * Called after controller is completely loaded
     */
    vm.init = function() {

    };

    $scope.goTo = function(url) {
        $window.location.href = url;
    };

    vm.init();

}]);

