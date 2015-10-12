 <!DOCTYPE html>
<html lang="en-US">
<script src="/assets/js/angular.min.js"></script>
<body>
<div ng-app="" ng-init="mySwitch=true">
	<p><button ng-disabled="mySwitch">Click Me!</button></p>
	<p><input type="checkbox" ng-model="mySwitch">Button</p>
</div>  
</body>
</html> 