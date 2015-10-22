 <!DOCTYPE html>
<html lang="en-US">
<head><link rel="stylesheet" type="text/css" href="/assets/css/style.css"></head>
<body>
<script src="/assets/js/angular.min.js"></script>
<div ng-app="">
  Name : <input type="text" ng-model="name">
  Surname : <input type="text" ng-model="surname"><br>
  <h1>Hello {{name}} {{surname}}</h1>
</div>
<div class="codeBox">
	<xmp>
		<script src="/assets/js/angular.min.js"></script>
		<div ng-app="">
		  Name : <input type="text" ng-model="name">
		  Surname : <input type="text" ng-model="surname"><br>
		  <h1>Hello {{name}} {{surname}}</h1>
		</div>
	</xmp>
</div>
</body>
</html> 