 <!DOCTYPE html>
<html lang="en-US">
<script src="/assets/js/angular.min.js"></script>
<body>

<div ng-app="">
  Name : <input type="text" ng-model="name">
  Surname : <input type="text" ng-model="surname"><br>
  <h1>Hello {{name}} {{surname}}</h1>
</div>

</body>
</html> 