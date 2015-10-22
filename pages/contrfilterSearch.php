 <!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>

<div ng-app="myApp" ng-controller="namesCtrl">

Filter:<input type="text" ng-model="filterInput"><br>

<ul>
  <li ng-repeat="x in names | filter:filterInput | orderBy:'country'">
    {{ (x.name | uppercase) + ', ' + x.country }}
  </li>
</ul>
</div>
<script src="/assets/js/angular.min.js"></script>
<script>
var app = angular.module('myApp', []);
app.controller('namesCtrl', function($scope) {
    $scope.names=[
        {name: 'Dan', country: 'Italy'},
        {name: 'Arturo',country: 'Chile'},
        {name: 'David', country: 'France'},
        {name: 'Alex', country: 'Italy'}
        ];
});
</script>
<div class="codeBox">
	<xmp>
		<div ng-app="myApp" ng-controller="namesCtrl">

			Filter:<input type="text" ng-model="filterInput"><br>
			
			<ul>
			  <li ng-repeat="x in names | filter:filterInput | orderBy:'country'">
			    {{ (x.name | uppercase) + ', ' + x.country }}
			  </li>
			</ul>
			</div>
			<script>
			var app = angular.module('myApp', []);
			app.controller('namesCtrl', function($scope) {
			    $scope.names=[
			        {name: 'Dan', country: 'Italy'},
			        {name: 'Arturo',country: 'Chile'},
			        {name: 'David', country: 'France'},
			        {name: 'Alex', country: 'Italy'}
			        ];
			});
			</script>
		</div>
	</xmp>
</div> 
</body>
</html> 