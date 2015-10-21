 <!DOCTYPE html>
<html lang="en-US">
<script src="/assets/js/angular.min.js"></script>
<body>
<p><b>Directive:</b> ng-init to initialize this array points=[1,15,19,2,40] from whic then we are showing the third element</p>
<div ng-app="" ng-init="points=[1,15,19,2,40]">
	<p>The third result is {{ points[2] }}</p>
</div> 
</body>
</html> 