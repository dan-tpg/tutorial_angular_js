 <!DOCTYPE html>
<html lang="en-US">
<script src="/assets/js/angular.min.js"></script>
<body>
 <div ng-app="myApp" ng-controller="personCtrl">

First Name: <input type="text" ng-model="firstName"><br>
Last Name: <input type="text" ng-model="lastName"><br>
<br>
{{fullName()}}

</div>

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
</body>
</html> 