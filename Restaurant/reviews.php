<!DOCTYPE HTML>
<?php include('dbcon.php'); ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Restaurant</title>
<link rel="icon" href="images/home/mainlogo.png" type="image" />
<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="container">
  <header>
    <nav>
      <ul id="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="reviews.php" class="current">Reviews</a></li>
        <li><a href="contact.php">Contact</a></li>
		<li><a href="about.php">About Us</a></li>
      </ul>
    </nav>
  </header>
 
  <div class="wrapper">
    <div class="border"></div>
	
	
	 <article>
	 <h3>Reviews</h3>
	 <?php
	$query=mysql_query("select * from tbl_reviews ORDER by Review_ID DESC")or die(mysql_error());
	while($row=mysql_fetch_array($query)){
	$id=$row['Review_ID'];
	?>
   
	
      
      <blockquote><?php echo $row['Review'];?>
	  <span>~ <?php echo $row['Name'];?></span></blockquote>
      <div class="border3"></div>
      
   
	
	<?php } ?>
	 </article>
    <aside class="sidebar">
       <!-- Side Bar Blogs -->
		<?php include('sidebar_widget.php'); ?>
	<!-- End -->
    </aside>
    <div class="border2"></div>
    <br>
  </div>
  <footer>
    <div class="border"></div>
    <div class="footer-widget">	
      <h4>Our Restaurant</h4>
          <p><strong>The Story</strong><br>Our Restaurant is a company founded by a group of friends,
		  it just only a dream of them to create a business, a business were the products is deserts and sweet foods.
		  After they graduated in collage each of them find a job in different part of the world, they roam around 
		  and seek and tried different local pastries and specialties. After many years at work they finally save 
		  enough money and they return back to their home and once again reunited. They took basic training in baking
		  and kitchen management....
	  <a href="about.php" class="right" style="padding-top:7px"><strong>Continue Reading &raquo;</strong></a> </p> 
    </div>
    <div class="footer-widget">
     <h4>Site Map</h4>
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d980.1256586356194!2d122.9606675531109!3d10.69566026638359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e63341e8baf297!2sArt+District!5e0!3m2!1sen!2s!4v1393956015227" width="320" height="300" frameborder="0" style="border:0"></iframe>	
    </div>
    <div class="footer-widget">
      <h4>We Are Social!</h4>
      <div id="social"> <a href="http://twitter.com" class="s3d twitter"> Twitter <span class="icons twitter"></span> </a> <a href="http://www.facebook.com" class="s3d facebook"> Facebook <span class="icons facebook"></span> </a> <a href="http://forrst.com" class="s3d forrst"> Forrst <span class="icons forrst"></span> </a> <a href="http://www.flickr.com" class="s3d flickr"> Flickr <span class="icons flickr"></span> </a> <a href="#" class="s3d designmoo"> Designmoo <span class="icons designmoo"></span> </a> </div>
    </div>
    <div class="border2"></div>
    <br />
    <span class="copyright"><span class="left"><br />
    &copy; Copyright 2014 - All Rights Reserved -
    <br />
    <br>
    <br />
    </span></span></footer>
</div>
</body>
</html>
