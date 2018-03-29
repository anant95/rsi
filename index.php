<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en"><head> <title>RSI||Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style> 
	
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
	#just{
		margin-left: 20px;
		text-align: justify;
	}
 #grad1 {
    height: 200px;
    background-color: #cccccc;
    background-image: url(images/NnzxG4S.jpg);
   
}
</style>
 	</head><body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div  class="topnav" id="myTopnav">
      <a class="navbar-brand" href="#">WebSiteName</a>
   
    
       <a class="active1" href="index.php">Home</a>
      <a href="products.php">Products</a>
      <a href="#">Page 2</a>
      <a href="#">Page 3</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
</nav>
 <div id="just" class="col-sm-4"> <strong><h3>Company profile</h3></strong>
 <p>	We are one of the pioneers in the field of Complete Laboratory Equipments, Teaching Aids, Measuring Instruments and Laser Based Experiments for Optics & Fiber Optic Laboratories. We cover a complete range of U.G./P.G. Physics, Engineering Institutes & Research Laboratory Equipments for Universities, Colleges and Research Organizations.</p>
<p>We are in production line for more than two decades and are serving more than 250 reputed Institutions all over the Country, our top clients includes ISRO Bangalore, DRDO Gwalior, CECRI Karaikudi, IIT’s and REC’s/NIT’s, Various Universities and Colleges etc, all our clients have a very high opinion about the performance and quality of our products, proven by their certificates.
Apart from our regular production we are also interested in the development of new technology and improving upon the present state of the experiments on the basis of constructive feed back from our customers, we also undertake the development of new experiments and circuits for various research and development purposes.</p>
<p>At our facility we make continuous efforts to improve upon the quality and reliability of our products to ensure long time service.</p>
</div><br/><br /> 
  <div class="col-sm-7" >
  	
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/3848765-wallpaper-images-download.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/forest_lake_reflection_island_mist_97668_1920x1080.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/NnzxG4S.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>

<div id="just" class="col-sm-12">
<strong>Services:</strong> <br />
We have a team of qualified Engineers along with qualified Supporting Staff to arrange Special Training, Installation and Demonstration of the Equipments at our Client’s Site. 
Further more all our Equipments are Warranted against any Manufacturing defects for one year, which is backed by our prompt after sales services throughout the country
</div>
	</body>
	<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</html>