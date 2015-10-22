<!DOCTYPE html>
<html lang="en-US">
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<body>
<p><b>Directive:</b> ng-init to initialize this array points=[1,15,19,2,40] from which then we are showing the third element</p>
<div ng-app="" ng-init="points=[1,15,19,2,40]">
	<p>The third result is {{ points[2] }}</p>
</div> 
<div class="codeBox">
	<xmp>
	<div ng-app="" ng-init="points=[1,15,19,2,40]">
		<p>The third result is {{ points[2] }}</p>
	</div>
	</xmp>
</div>
<script src="/assets/js/angular.min.js"></script>
</body>
</html> 