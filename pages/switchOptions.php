 <!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<script src="/assets/js/angular.min.js"></script>
<div ng-app="" ng-init="mySwitch=true">
	<p><button ng-disabled="mySwitch">Click Me!</button></p>
	<p><input type="checkbox" ng-model="mySwitch">Button</p>
</div>  
<div class="codeBox">
	<xmp>
		<script src="/assets/js/angular.min.js"></script>
		<div ng-app="" ng-init="mySwitch=true">
			<p><button ng-disabled="mySwitch">Click Me!</button></p>
			<p><input type="checkbox" ng-model="mySwitch">Button</p>
		</div>
	</xmp>
</div>
</body>
</html> 