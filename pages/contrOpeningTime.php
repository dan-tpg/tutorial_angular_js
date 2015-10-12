 <!DOCTYPE html>
<html lang="en-US">
<script src="/assets/js/angular.min.js"></script>
<body>
<div ng-app="myApp" ng-controller="myCtrl">
	{{isOpen}}
</div>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
	var objDate = new Date();
	var hours = objDate.getHours();
	if(hours >= 18){
		$scope.isOpen = "We are Closed";
	}
	else{
	    $scope.isOpen = "Wre are Open";
	}
});
</script> 
</body>
</html> 