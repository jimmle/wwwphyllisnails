<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<dev class="lmenu">
<ul style="font-family: "Lucida Console", Monaco, monospace;">
<li class="lmenu" onclick="location.href='index.php'">home</li>
<li class="lmenu" onclick="location.href='menu.html'">menu</li>
<li class="lmenu" onclick="location.href='promotions.html'">promotions</li>
<li class="lmenu" onclick="location.href='gallery.html'">gallery</li>
<li class="lmenu" onclick="location.href='contact.html'">contact</li>
</ul>
</dev>

<!--content287.6-->
<h1>Welcome to Phyllis Nails</h1>
<img id="photo" src="one.jpg" alt="lynn" width="auto" height="293em" style="transition: src 1s;"></img> 

<script>
	var count = 0;
	setInterval(function() {change_pic()}, 3000);
	function change_pic(){
		var pic = document.getElementById("photo").src;	
		if(count%2 < 1)
			document.getElementById("photo").src="two.jpg";
		else
			document.getElementById("photo").src="one.jpg";
		count++;
	}
</script>
</body>
</html>