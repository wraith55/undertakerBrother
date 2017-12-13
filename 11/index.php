<?php include('includes/process.php');?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CM Punk vs The Undertaker</title>
  <meta name="description" content="The longest reigning champion of the modern era versus the Phenom of the WWE">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="wrapper">
<header class="banner">
<h1><img class="punk" src= "https://picturesofcmpunk.files.wordpress.com/2012/09/133008395393.png" alt= "CM Punk Logo" width="185" height="185">The Best in the World vs The Deadman<img class="undertaker" src= "https://vignette.wikia.nocookie.net/prowrestling/images/9/95/Undertaker_logo.2.png/revision/latest/scale-to-width-down/185?cb=20140912131522" alt= "Undertaker Logo"></h1>
</header>

<main class= "main">
CM PUNK
<br>
<img class="punkring" src= "https://vignette2.wikia.nocookie.net/prowrestling/images/5/55/The_Undertaker_v_CM_Punk_at_WrestleMania_29_2.jpg/revision/latest?cb=20130630103909" alt= "CM Punk in the ring" width= "475"> 
<br>
<?php print $formMessage;?>
<form class="matchquestions" method="post" action="index.php">
 
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
 
    <legend>Who do you think will win?</legend>
     
    <label for="cmpunk">CM Punk</label>
    <input type="radio" name="whowins" id="cmpunk" value="cmpunk">
     
    <label for="undertaker">The Undertaker</label>
    <input type="radio" name="whowins" id="undertaker" value="undertaker">
 
  </fieldset>
   
  <fieldset>
 
    <legend>How will the match end?</legend>
 
    <label for="pinfall">Pinfall</label>
    <input type="checkbox" name="ending[]" id="pinfall" value="pinfall">
 
    <label for="submission">Submission</label>
    <input type="checkbox" name="ending[]" id="submission" value="submission">
 
    <label for="disqualification">Disqualification</label>
    <input type="checkbox" name="ending[]" id="disqualification" value="disqualification">
 
  </fieldset>
   
</fieldset> 
 
<fieldset>
 
  <legend>Subscribe Today</legend>
 
  <label for="network">Subscribe to the WWE Network?</label>
  <select name="network" id="network">
    <option value="no">No</option>
    <option value="yes">Yes</option>
  </select>
 
  <br>
  <br>
 
  <label for="comments">Comments</label>
  <br>
  <textarea name="comments" id="comments"></textarea>
 
</fieldset>
 
<input type="submit" value="submit">
</form>

</main>

<aside class= "aside">
THE UNDERTAKER
<br>
<img class="takerentrance" src= "http://www.wwe.com/f/styles/gallery_img_l/public/photo/image/2013/04/WM29_Photo_150.jpg" alt= "The Undertaker makes his way to the ring" width= "475"> 
<br>

<p id="demo">Click the button to Tombstone CM Punk.</p>

<button onclick="myTombstone()">Rest in Peace</button>
<br>
<img id="tombstone" src="https://media.giphy.com/media/TQyo0gHkpCTLy/giphy.gif" style="visibility:hidden" alt= "CM Punk gets Tombstoned"/>

<script>
function myTombstone() {
    document.getElementById('tombstone').style.visibility='visible';
}
</script>


</aside>

<footer class= "footer">
Live on the WWE Network
</footer>
</div>
</body>
</html>