 <!DOCTYPE html>
<html lang="en-US">
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<body>

<script src="/assets/js/angular.min.js"></script>
<div ng-app="myApp" ng-controller="myCtrl">
  <h1>Hello {{name|uppercase}}</h1>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
	$scope.name="Danilo";
});
</script>
<div class="codeBox">
	<xmp>
		<script src="/assets/js/angular.min.js"></script>
		<div ng-app="myApp" ng-controller="myCtrl">
		  <h1>Hello {{name|uppercase}}</h1>
		</div>
		<script>
		var app = angular.module('myApp', []);
		app.controller('myCtrl', function($scope) {
			$scope.name="Danilo";
		});
		</script>
	</xmp>
</div>
</body>
</html> 