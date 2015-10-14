 <!DOCTYPE html>
<html lang="en-US">
<script src="/assets/js/angular.min.js"></script>
<script src="/assets/js/jquery-2.1.4.min.js"></script>
<header>
<title>Tutorial - Angular JS</title>
<meta name="author" content="Danilo D'Auria">
</header>
<body>
<h1>Tutorial - Angular JS</h1>
<script>
$.ajax({
	  url: "http://angularjs/pages/",
	  success: function(data){
	     $(data).find("a:contains(.php)").each(function(){
	        // will loop through 
	        var file = $(this).attr("href");

	        $('<a href="/pages/'+file+'"></a><br>').html(file).appendTo('#listLinks')
	     });
	  }
	});
</script>
<div id="listLinks"></div>
</body>
</html> 