 <!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<script src="/assets/js/angular.min.js"></script>
<div ng-app="" ng-init="quantity=1;price=0.3">
<h4>Product: Pencil</h4>
Quantity: <input type="number" ng-model="quantity"><br>
Price: <input type="number" ng-model="price" step="0.01"><br>
<p>Total = {{ (quantity * price) | currency:"&pound;" }}</p>
</div>
<div class="codeBox">
	<xmp>
		<script src="/assets/js/angular.min.js"></script>
		<div ng-app="" ng-init="quantity=1;price=0.3">
			<h4>Product: Pencil</h4>
			Quantity: <input type="number" ng-model="quantity"><br>
			Price: <input type="number" ng-model="price" step="0.01"><br>
			<p>Total = {{ (quantity * price) | currency:"&pound;" }}</p>
		</div>
	</xmp>
</div>
</body>
</html> 