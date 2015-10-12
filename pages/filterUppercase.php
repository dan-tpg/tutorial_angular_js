 <!DOCTYPE html>
<html lang="en-US">
<script src="/assets/js/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">
  <h1>Hello {{name|uppercase}}</h1>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
	$scope.name="Danilo";
});
</script>
</body>
</html> 