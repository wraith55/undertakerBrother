
<?php include('includes/process.php');?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Resurrection</title>
  <meta name="description" content="Undertaker returns to his dark ways">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class= "wrapper">
	<header class= "banner">
	<h1>The Resurrection<br><iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x57r9ho" allowfullscreen></iframe></h1><br><?php include('includes/navigation.php');?>
	</header>
		<main class= "main"><br>Infuriated that his brother had become a mere mortal, Kane betrayed the Undertaker, burying
			him alive, never to be heard from again. That which is dead can never die, though, and the
			Undertaker returned from the grave to defeat his brother at Wrestlemania 20. Undertaker
			continued his path of destruction, carving through newer superstars such as CM Punk, Edge, and
			Batista on his path to reclaiming his former glory.</main>
		<aside class= "aside">
		
		<?php print $formMessage;?>
		<p class="form-default">Join the Creatures of the Night!</p><form class="matchquestions" method="post" action="page4.php">
 
<fieldset>
 
  <legend>Personal Information</legend>
   
 
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
 
  <br>
  <br>
  
  <label for="email">Email:</label>
  <input type="text" id="email" name="email">
 
  <br>
  <br>
  
  <fieldset>
 
    <legend>What's your favorite Undertaker persona?</legend>
     
    <label for="OriginalDeadman">Original Deadman</label>
    <input type="radio" name="favetaker" id="ogdeadman" value="ogdeadman">
     
    <label for="BigEvil">Big Evil</label>
    <input type="radio" name="favetaker" id="bigevil" value="bigevil">
	
	<label for="undertaker">The Resurrected Phenom</label>
    <input type="radio" name="favetaker" id="phenom" value="phenom">
 
  </fieldset>
   
  <fieldset>
 
    <legend>What's your favorite Undertaker move?</legend>
 
    <label for="chokeslam">Chokeslam</label>
    <input type="checkbox" name="ending[]" id="chokeslam" value="chokeslam">
 
    <label for="chokeslam">Last Ride</label>
    <input type="checkbox" name="ending[]" id="LastRide" value="LastRide">
 
    <label for="tombstone">Tombstone Piledriver</label>
    <input type="checkbox" name="ending[]" id="tombstone" value="tombstone">
 
  </fieldset>
   
</fieldset> 
 
<fieldset>
 
  <legend>Friend or Foe?</legend>
 
  <label for="kane">Do you prefer Undertaker fighting with Kane or teaming with him?</label>
  <select name="kane" id="kane">
    <option value="fight">Fight!</option>
    <option value="team">Team!</option>
  </select>
 
  <br>
  <br>
 
  <label for="comments">Comments</label>
  <br>
  <textarea name="comments" id="comments"></textarea>
 
</fieldset>
 
<input type="submit" value="submit">
		</aside>
		<footer class= "footer">
Rest In Peace
</footer>
	</div>
</body>