 <!DOCTYPE html>
<html lang="en-US">
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<body>
 <div ng-app="myApp" ng-controller="personCtrl">

First Name: <input type="text" ng-model="firstName"><br>
Last Name: <input type="text" ng-model="lastName"><br>
<br>
{{fullName()}}

</div>

<script src="/assets/js/angular.min.js"></script>
<script>
var app = angular.module('myApp', []);
app.controller('personCtrl', function($scope) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
    $scope.fullName = function() {
        return "The fullname is: "+$scope.firstName + " " + $scope.lastName;
    }
});
</script>
<div class="codeBox">
	<xmp>
		<div ng-app="myApp" ng-controller="personCtrl">

			First Name: <input type="text" ng-model="firstName"><br>
			Last Name: <input type="text" ng-model="lastName"><br>
			<br>
			{{fullName()}}
		
		</div>

		<script src="/assets/js/angular.min.js"></script>
		<script>
		var app = angular.module('myApp', []);
		app.controller('personCtrl', function($scope) {
		    $scope.firstName = "John";
		    $scope.lastName = "Doe";
		    $scope.fullName = function() {
		        return "The fullname is: "+$scope.firstName + " " + $scope.lastName;
		    }
		});
		</script>
	</xmp>
</div>
</body>
</html> 