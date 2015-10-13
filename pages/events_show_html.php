<!DOCTYPE html>
<html lang="en-US">
<script src="/assets/js/angular.min.js"></script>
<script src="/assets/js/jquery-2.1.4.min.js"></script>
<header><title>Tutorial - Angular JS</title></header>
<body>
<h1>Tutorial - Angular JS - Show/Hide Div</h1>
<div ng-app="myApp" ng-controller="personCtrl">

<button ng-click="toggle()" id="showHideButton">Hide</button>

<p ng-show="myVar">
First Name: <input type="text" ng-model="firstName"><br>
Last Name: <input type="text" ng-model="lastName"><br>
<br>
Full Name: {{firstName + " " + lastName}}
</p>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('personCtrl', function($scope) {
    $scope.firstName = "Danilo",
    $scope.lastName = "D'Auria"
    $scope.myVar = true;
    $scope.toggle = function() {
        $scope.myVar = !$scope.myVar;
        if(!$scope.myVar){
        	jQuery('#showHideButton').html("Show");
        }else{
        	jQuery('#showHideButton').html("Hide");
        }
    }
});
</script>  
</body>
</html>