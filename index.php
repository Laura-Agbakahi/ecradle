<?php ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title> The eCradle website/ Welcome</title>
	 <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Sharp brains elearning web design">
	<meta name="keywords" content="elearning website, improve kids orals>
	<meta name="author" content="nurserykinderschool curriculum">
	<link rel='stylesheet' href='ekids.css'>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>

   <body>
<body>


	<header>
	<div class="container">
<div id="branding">
<img src='media/logo2.png' width="70px" height="70px">
</div>
<iframe width="50" height="50" src="https://www.youtube.com/embed/L0MK7qz13bU" frameborder="0" allow="accelerometer; autoplay ; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<nav>
    <ul>
      <li class="current"><a href="index.html">cradleHome</a></li>
      <li><a href="about.html" target="_blank">About us</a></li>
      <li><a href="alphabet.html" target="_blank">Alphabets</a></li>
      <li><a href="number.html" target="_blank">Numbers</a></li>
	<li><a href="animal.html" target="_blank">Animals</a></li>
    </ul>
  </div>
</div>
</nav>
</header>

<!--MAKE FULL SLIDE-->

    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="images/baby.jpg" style="width:100%">
  <div class="text">Kinder class</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="images/like.jpg" style="width:100%">
  <div class="text">Like/follow our page</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="images/toy.jpg" style="width:100%">
  <div class="text">Games to play</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="images/kids.jpg" style="width:100%">
  <div class="text">Kinder Homeschool</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="images/learn.jpg" style="width:100%">
  <div class="text">learning is so much fun</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>


<section id="showcase">
<div class="container">
<h1>Welcome to e-Cradle Kinder School</h1>
<p><img src="images/abc.jpg" class="float-img"/> In recent decades, studies have shown that early childhood education<br>
is critical in preparing children to enter and succeed in the (grade school) classroom,<br>
diminishing their risk of social-emotional mental health problems and increasing their<br>
and increasing their self-sufficiency as adults.<br>
<p> The Internet isn't just for big kids anymore! With many sites now available for toddlers, learning colors, numbers, and letters has never been easier. Check out our educating videos, audios, for kids, and find fun games, and more that help make learning early skills fun.</p>
<p>Also introducing, save the child initiative to curb ills against the child.</p>
<div class="row">
  <div class="column">
    <img src="images/baby5.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="images/baby2.jpg"  style="width:100%">
  </div>
  <div class="column">
    <img src="images/baby1.jpg" = style="width:100%">

</div>
</section>

<section id="newsletter">
<div class="container">
<h1>subscribe to our Newsletter</h1>
<form>
<input type="email" placeholder="enter email">
<button type="submit" class="button_1">Subscribe</button>
</form>
</div>
</section>

 <section id="boxes"
<div class="container">
<div class="box">
<marquee behaviour="slide" direction="left">
<img src="images/animals.png"></marquee>
<h2><a href="cartoonvideos.html">Cartoon Videos</a></h2>
<p>Amazing Videos,Shortmovies,poems for kids</p>
</div>


<div class="box">
<marquee behaviour="slide" direction="up">
<img src="images/animals.png"></marquee>
<h2><a href="nursery.html">Nursery Rhymes</a></h2>
<p>Fun and educating songs too!!!</p>
</div>


<div class="box">
<marquee behaviour="slide" direction="right">
<img src="images/animals.png"></marquee>
<h2><a href="parentscolumn.html" class="parentscolumn">Parents Column</a></h2>
<p>All parents want to help their kids do well in every facet of life, but how can they succed without any hinder to their progress. Read what the experts say</p>
</div>
</section>
</div>
</section>



<div id="footer">
  <div>
    <div> <span>Follow us</span> <a href="https://www.facebook.com/kiddiesWorld" target="_blank" class="facebook">Facebook</a> <a href="#" class="subscribe">Subscribe</a> <a href="#https://www.twitter.com/kiddiesworld" class="twitter">Twitter</a> <a href="#https://www.instagram.com/kiddiesworld" class="instagram">instagram</a> </div>
    <ul>
      <li> <a href="#"><img src="images/playing-in-grass.gif" alt=""></a>
        <p>Our unique services ranges from online tutorials, on-one child tutoring, kiddies books and audio for an affordable price</p>
        <a href="#" class="readmore">Read more</a> </li>
      <li> <a href="#"><img src="images/baby-smiling.gif" alt=""></a>
        <p>Click here for cbt multipurpose quiz</p>
        <a href="cbt.html" target="_blank" class="readmore">CBT for multipurpose use</a></li>
    </ul>
  </div>
  <p class="footnote">Copyright &copy; 2020 <a href="#">ecradle Website</a> All rights reserved |  e-learning Website<a target="_blank"</a></p>


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
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}



</script>
</body>

   </html>
