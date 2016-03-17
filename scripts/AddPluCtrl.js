
app.controller('AddPluController', ['$scope', '$window', function($scope, $window) {

    var vm = this;

    /*
     * Called after controller is completely loaded
     */
    vm.init = function() {

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

