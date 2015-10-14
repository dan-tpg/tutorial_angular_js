 <!DOCTYPE html>
<html lang="en-US">
<script src="/assets/js/angular.min.js"></script>
<header>
<meta name="author" content="Danilo D'Auria">
</header>
<body>

<div ng-app="myApp" ng-controller="customersCtrl">
	<ul>
	  <li ng-repeat="x in names">
	    {{ x.Name + ', ' + x.Country }}
	  </li>
	</ul>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    $http.get("http://www.w3schools.com/angular/customers.php")
    .success(function(response) {$scope.names = response.records;});
});
</script>  
</body>
</html> 