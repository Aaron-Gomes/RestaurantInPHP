<!DOCTYPE HTML>
<?php include('dbcon.php'); ?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Our Restaurant</title>
	<link rel="icon" href="images/home/mainlogo.png" type="image" />
	<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="styles/base.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<script type="text/javascript" src="scripts/jquery.pikachoose.js"></script>
	<script type="text/javascript">
				$(document).ready(function() {
				$("#pikame").PikaChoose();	});
	</script>
	</head>
	<body>
    <div id="container">
      <header>
        <nav>
          <ul id="nav">
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="reviews.php">Reviews</a></li>
            <li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About Us</a></li>
          </ul>
        </nav>
		<div class="pull-left1">
		<img src="images/Home/mainlogo.png" width="220" height="150">
		</div>
		<div class="pull-left2">
        <hgroup class="intro">
          <h1 class="title">My Restaurant</h1>
          <h3 class="tagline">&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Drinks & Desserts </h3>
        </hgroup>
		</div>
		<div class="reservations">
          <span class="reservations-title">Call Us:</span>
          <hr class="hr-solid" />
          <span style="font-family: 'Lobster13Regular', cursive;">+639309767212</span>
          <hr class="hr-dashed" />
		  <span class="reservations-title">Or Email Us On:</span>
		  <div style="margin-top:15px"> <a class="button" href=""http://www.facebook.com"" title="Facebook">FaceBook</a> </div>
        </div>
        
        <br />
        <br />
		<br />
		<br />
		<br />
		<br />
		<br />
      </header>
      <div class="wrapper">
        <div class="pikachoose">
		<?php
		include('demo.html')
		?>
        <div class="clear"></div>
        <div class="border"></div>
        <div class="home-widget">
          <h3>Choco Bunch Cake</h3>
          <img src="images/home/cake.jpg" width="300" height="200" alt="" />
          <p>This decadent triple-layer dessert takes its name from German's Sweet Chocolate, a product that's not German at all: the versatile baking chocolate was created by an American baker named Samuel German in 1852. </p>
        </div>
        <div class="home-widget">
          <h3>Special Velvet Cake</h3>
          <img src="images/home/cake2.jpg" width="300" height="200" alt="" />
          <p>Moist and luscious, classic special velvet cake is as delightful to behold as it is to eat!</p>
        </div>
        <div class="home-widget">
          <h3>Saute Berry Cake</h3>
          <img src="images/home/cake1.jpg" width="300" height="200" alt="" />
          <p>This delicious cake makes your day complete... </p>
        </div>
        <div class="border2"></div>
        <br />
        
      </div>
      <footer>
	    <div class="border"></div>
		<div class="wrapper">
		<div class="footer-widget">
          <h4>Our Restaurant's</h4>
          <p><strong>The Story</strong><br>Our Restaurant is a company founded by a group of friends,
		  it just only a dream of them to create a business, a business were the products is deserts and sweet foods.
		  After they graduated in collage each of them find a job in different part of the world, they roam around 
		  and seek and tried different local pastries and specialties. After many years at work they finally save 
		  enough money and they return back to their home and once again reunited. They took basic training in baking
		  and kitchen management....
		  <a href="about.php" class="right" style="padding-top:7px"><strong>Continue Reading &raquo;</strong></a>  </p>
        </div>
        </div>
        <div class="footer-widget">
           <!-- Side Bar Blogs -->
		   <h4>Site Map</h4>
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d980.1256586356194!2d122.9606675531109!3d10.69566026638359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e63341e8baf297!2sArt+District!5e0!3m2!1sen!2s!4v1393956015227" width="320" height="300" frameborder="0" style="border:0"></iframe>	
	<!-- End -->
        </div>
        <div class="footer-widget">
          <h4>We Are Social!</h4>
          <div id="social"> <a href="http://twitter.com" class="s3d twitter" target="_blank"> Twitter <span class="icons twitter"></span> </a> <a href="http://www.facebook.com" class="s3d facebook" target="_blank"> Facebook <span class="icons facebook"></span> </a> <a href="http://forrst.com" class="s3d forrst" target="_blank"> Forrst <span class="icons forrst"></span> </a> <a href="http://www.flickr.com" class="s3d flickr" target="_blank"> Flickr <span class="icons flickr"></span> </a> <a href="#" class="s3d designmoo" target="_blank"> Designmoo <span class="icons designmoo"></span> </a> </div>
        </div>
        <div class="border2"></div>
        <br/>
        <center>&copy; Copyright 2014 - All Rights Reserved -
        <br>
        <br />
        </span></span></footer>
    </div>
</body>
</html>