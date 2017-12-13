<!doctype html>
<html lang="en">
        
<head>
  <meta charset="utf-8">
  <title>Brotherbrotherbrotherbrother</title>
  <meta name="description" content="Help Brother!">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="hoganbackground">
<img src="images/brotherhelp.png" alt= "brother help">
<img src="images/hogangif.gif" class="hogan" alt="Hulkamania brother">
<audio autoplay loop id="hoganTheme" >
    <source src="music/HoganTheme.mp3" >
    Your browser does not support the audio element.
</audio>

<script>
    R=0; 
    x1=.1; 
    y1=.05; 
    x2=.25; 
    y2=.24; 
    x3=-1.6; 
    y3=.24; 
    x4=300; 
    y4=200; 
    x5=800; 
    y5=200; 
    DI=document.getElementsByClassName("hogan"); 
    DIL=DI.length; 
    function A() {
      for(i=0; i-DIL; i++) {
        DIS=DI[ i ].style; 
        DIS.position='absolute'; 
        DIS.left=(Math.sin(R*x1+i*x2+x3)*x4+x5)+"px"; 
        DIS.top=(Math.cos(R*y1+i*y2+y3)*y4+y5)+"px";
        }
      R++ 
    }
    setInterval('A()',50); 
    void(0);
  </script>  
  
</body>

