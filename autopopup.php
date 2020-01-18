<!DOCTYPE html>
<html>
<head>
	<title>Auto Popup</title>
</head>
<body>
	<div id="mydiv"> <h1>This is heading of Dib</h1>
		<button id="mybtn" onclick="myfun()">close</button>
	</div>
	<script>
		var x=document.getElementById("mydiv");
		{
			seTimeout(function(){
			x.style.dislpay=="none";
			})
		}
		function myfun(){
			document.getELementById("mybtn"){
				onclick.hide("mybtn");

			}
		}
	</script>
</body>
</html>