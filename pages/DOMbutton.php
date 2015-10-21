 <!DOCTYPE html>
<html lang="en-US">
<script src="/assets/js/angular.min.js"></script>
<script src="/assets/js/jquery-2.1.4.min.js"></script>
<body>
<p>
<b>Directives:</b> ng-model, ng-show<br>
<b>Controller:</b> ng-controller="initController" to initialize the values of mySwitch and myDiv 
</p>

<div ng-app="myApp" ng-controller="initController">
	<div style="float:left;margin-right:20px;">
		<p><input type="checkbox" ng-model="mySwitch" id="mySwitchCheckbox"><span id="myButtonText">Enable Button</span></p>
		<p><button ng-disabled="mySwitch">Click Me!</button></p>
	</div>
	<div style="float:left;">
		<p><input type="checkbox" ng-model="myDiv" id="myDivCheckbox"><span id="myDivButtonText">Hide Div</span></p>
		<p ng-show="myDiv" id="myDiv">Some text here..<br>blah blah blah</p>
	</div>
	<br style="clear:both;">
	
</div>  
<script>
jQuery(document).ready(function(){
	jQuery('#myDivCheckbox').change(function(){
		if(this.checked){
			jQuery('#myDivButtonText').html("Hide Div");
		}else{jQuery('#myDivButtonText').html("Show Div");}
	});
	jQuery('#mySwitchCheckbox').change(function(){
		if(this.checked){
			jQuery('#myButtonText').html("Enable Button");
		}else{jQuery('#myButtonText').html("Disable Button");}
	});
});
var myApp = angular.module('myApp',[]);
myApp.controller('initController', ['$scope', function($scope) {
  $scope.mySwitch = true;
  $scope.myDiv = true;
}]);
</script>
</body>
</html> 