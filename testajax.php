<!doctype HTML>
<html>
<head>
<script>
	function showHint(str) {
		if (str.length == 0) {
			document.getElementById("response").innerHTML = "";
			return;
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("response").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET", "testphp.php?q=" + str, true);
			xmlhttp.send();
		}
	}
</script>
</head>
<body>
<form action="" name="form1">
<label for="name">Enter the name:&nbsp;</label><input type="text" onkeyup="showHint(this.value)">
<div>Suggestions:&nbsp;<span id="response"></span></div>
</form>
</body>
</html>
