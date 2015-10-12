 <!DOCTYPE html>
<html lang="en-US">
<script src="/assets/js/angular.min.js"></script>
<body>
<div ng-app="" ng-init="quantity=1;price=0.3">
<h4>Product: Pencil</h4>
Quantity: <input type="number" ng-model="quantity"><br>
Price: <input type="number" ng-model="price" step="0.01"><br>
<p>Total = {{ (quantity * price) | currency:"&pound;" }}</p>
</div>
</body>
</html> 