
'use strict';

app.directive('vegecheckNavbar', function($sce){
	return {
	    restrict: 'AE',
        templateUrl: $sce.trustAsResourceUrl('http://web.engr.illinois.edu/~djamro2/vegecheckNavbar.html'),
		replace: 'true',
        link: function(scope, element, attrs) {

        }
    };
});
