<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="lmenu" style="z-index: 1;">
<ul>
<li class="lmenu" onclick="location.href='index.php'">home</li>
<li class="lmenu" onclick="location.href='menu.html'">menu</li>
<li class="lmenu" onclick="location.href='promotions.html'">promotions</li>
<li class="lmenu" onclick="location.href='gallery.html'">gallery</li>
<li class="lmenu" onclick="location.href='contact.html'">contact</li>
</ul>
</div>

<!--content-->
<div class="header">
<h1 id="header">Welcome to Phyllis Nails</h1>
</div>

<div class="article">
<div id="article">
<img id="photo" src="one.jpg" alt="lynn" style="transition: src 2s;" width="580" height="562"></img> 
</div>
</div>

<script>
	var image_list = ["one.jpg", "two.jpg", "three.jpg", "four.jpg", "five.jpg", "six.jpg", "seven.jpg", "eight.jpg", "nine.jpg", "ten.jpg"];
	var count=0;
	setInterval(function() {change_pic()}, 3000);
	function change_pic(){
		count++;
		if(count==10) count=0;
		document.getElementById("photo").src = image_list[count];
	}
</script>
</body>
</html>