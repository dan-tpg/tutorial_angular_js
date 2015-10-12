 <!DOCTYPE html>
<html lang="en-US">
<script src="/assets/js/angular.min.js"></script>
<body>
<div ng-app="" ng-init="names=['Dan','Alvaro','Paul']">
  <ul>
    <li ng-repeat="x in names">
      {{ x }}
    </li>
  </ul>
</div>
</body>
</html> 