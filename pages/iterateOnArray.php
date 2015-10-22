 <!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<script src="/assets/js/angular.min.js"></script>
<div ng-app="" ng-init="names=['Dan','Alvaro','Paul']">
  <ul>
    <li ng-repeat="x in names">
      {{ x }}
    </li>
  </ul>
</div>
<div class="codeBox">
	<xmp>
		<script src="/assets/js/angular.min.js"></script>
		<div ng-app="" ng-init="names=['Dan','Alvaro','Paul']">
		  <ul>
		    <li ng-repeat="x in names">
		      {{ x }}
		    </li>
		  </ul>
		</div>
	</xmp>
</div>
</body>
</html> 