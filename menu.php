<!DOCTYPE html>
<html>
<?php 
include 'header.php';
?>
<head>
<title>FEEDBACK</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
.foot {
    background-color:  #191970;
    color: whitesmoke;
    text-align: center;
    font-size: 15px;
    height: 50px;
    font-style: italic;
   padding-top: 20px;
   border-radius: 2%;
}
</style>
</head>

<body>


<div class="w3-content w3-section" >
    <img class="mySlides" src="images/Slide1.jpg" style="width:100%">
    <img class="mySlides" src="images/Slider2.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
<footer>
    <div  class="foot">copyright <i class="fa fa-copyright"></i> KAR developers</div>
</footer>
</body>
</html>
