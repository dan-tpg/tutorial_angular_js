 <!DOCTYPE html>
<html lang="en-US">
<header>
	<title>Tutorial - Angular JS</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</header>
<body>
<h1>Tutorial - Angular JS - Counter</h1>
<div ng-app="myApp" ng-controller="myCtrl">
	<button ng-click="count = count + 1">(+1)</button>
	<button ng-click="count = count + 5">(+5)</button>
	<button ng-click="count = count - 5">(-5)</button>
	<button ng-click="count = 0">Reset</button><br><br>
	Counter: <input type="text" ng-model="count">
</div>

<script src="/assets/js/angular.min.js"></script>
<script src="/assets/js/jquery-2.1.4.min.js"></script>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.count = 10;
});
</script>
<div class="codeBox">
	<xmp>
		<div ng-app="myApp" ng-controller="myCtrl">
			<button ng-click="count = count + 1">(+1)</button>
			<button ng-click="count = count + 5">(+5)</button>
			<button ng-click="count = count - 5">(-5)</button>
			<button ng-click="count = 0">Reset</button><br><br>
			Counter: <input type="text" ng-model="count">
		</div>
		
		<script src="/assets/js/angular.min.js"></script>
		<script src="/assets/js/jquery-2.1.4.min.js"></script>
		<script>
		var app = angular.module('myApp', []);
		app.controller('myCtrl', function($scope) {
		    $scope.count = 10;
		});
		</script>
	</xmp>
</div>
</body>
</html>