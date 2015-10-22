 <!DOCTYPE html>
<html lang="en-US">
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<body>
<p><b>Directive:</b> ng-controller</p>
<div ng-app="myApp" ng-controller="myCtrl">
	{{isOpen}}
</div>

<script src="/assets/js/angular.min.js"></script>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
	var objDate = new Date();
	var hours = objDate.getHours();
	if(hours >= 18){
		$scope.isOpen = "We are Closed";
	}
	else{
	    $scope.isOpen = "We are Open";
	}
});
</script> 

<div class="codeBox">
	<xmp>
		<div ng-app="myApp" ng-controller="myCtrl">
			{{isOpen}}
		</div>

		<script src="/assets/js/angular.min.js"></script>
		<script>
		var app = angular.module('myApp', []);
		app.controller('myCtrl', function($scope) {
			var objDate = new Date();
			var hours = objDate.getHours();
			if(hours >= 18){
				$scope.isOpen = "We are Closed";
			}
			else{
			    $scope.isOpen = "We are Open";
			}
		});
		</script>
	</xmp>
</div>
</body>
</html> 