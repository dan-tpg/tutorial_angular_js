 <!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>

<body>
<script src="/assets/js/angular.min.js"></script>
<div ng-app="" ng-init="person={firstName:'John',lastName:'Doe'}">
	<p>The name is {{ person.firstName }}</p>
	<p>The surname is <span ng-bind="person.lastName"></span></p>
</div> 
<div class="codeBox">
	<xmp>
		<script src="/assets/js/angular.min.js"></script>
		<div ng-app="" ng-init="person={firstName:'John',lastName:'Doe'}">
			<p>The name is {{ person.firstName }}</p>
			<p>The surname is <span ng-bind="person.lastName"></span></p>
		</div>
	</xmp>
</div>
</body>
</html> 