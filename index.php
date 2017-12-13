<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Undertaker Homepage</title>
  <meta name="description" content="A website dedicated to the Undertaker">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class= "wrapper">
	<header id="undertakerTheme" class="banner">
	<h1><img class="undertaker2" src= "images/takerlogo.png" id= "takerlogo" alt= "Undertaker Logo" onclick="showScary()">
	</h1>
	<h1>The Undertaker
		<br>
		<img id="undertakerInvis" src="images/takerscary.jpg" alt= "Scary Undertaker"
		height="1000" width="1000" style="display: none;" >
		</h1><br>
	<audio id="takergong" src="music/undertakergong.mp3">
  Your browser does not support the <code>audio</code> element.
</audio>
	<?php include('includes/navigation.php');?>
	</header>
	<main class= "main">With a career spanning nearly 30 years, no single individual has made quite the same impact on
			professional wrestling as The Undertaker. With multiple world championships, a Wrestlemania
			winning streak that will never be matched, and more notable matches than arguably any other
			wrestler in history, The Undertaker’s accomplishments are, without a doubt, those of a certified
			legend and future hall of famer. Throughout his illustrious career, The Undertaker has taken part
			in some of the most famous and infamous storylines and feuds the professional wrestling world
			has ever seen. Here, we take a brief look at the career of the Dead Man, the Phenom of WWE,
			the Undertaker.</main>
		<aside class= "aside">
		<a href= "http://www.wwe.com/superstars/undertaker"> Click here for the Undertaker's WWE Profile</a><br><a href= "https://en.wikipedia.org/wiki/The_Undertaker"> Click here for the Undertaker's Wikipedia page</a>
		</aside>
		<footer class= "footer">
Rest In Peace
</footer>
		</div>
		<script>
	function showScary() {
		var scary = document.getElementById('undertakerInvis');
		var normal = document.getElementById('takerlogo');
		var gong = document.getElementById('takergong');
		console.log(scary);
		scary.style="display: inline-block";
		normal.style="display: none";
		scary.style.opacity = 1;
		var fade = setInterval(function() { fadeOut() }, 250);
		gong.play ();
	}

	function fadeOut() {
		var scary = document.getElementById('undertakerInvis');
		var normal = document.getElementById('takerlogo');
		console.log("opacity: " + scary.style.opacity);
		if(scary.style.opacity > 0) {
			scary.style.opacity -= .1;
		}
		else {
			scary.style="display: none";
			normal.style="display: inline-block";
			clearInterval();
		}
	}
	
	
</script>
</body>


