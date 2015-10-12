 <!DOCTYPE html>
<html lang="en-US">
<script src="/assets/js/angular.min.js"></script>
<body>
<div ng-app="" ng-init="person={firstName:'John',lastName:'Doe'}">
	<p>The name is {{ person.firstName }}</p>
	<p>The surname is <span ng-bind="person.lastName"></span></p>
</div> 
</body>
</html> 