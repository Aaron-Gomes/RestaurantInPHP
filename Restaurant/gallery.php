<!DOCTYPE HTML>
<?php
// include("header.php");
include("dbcon.php");
?>

<html>

	<link rel="icon" href="images/home/mainlogo.png" type="image" />
	
	<body>
    <div id="container">
      <header>
        <nav>
          <ul id="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php" class="current">Gallery</a></li>
            <li><a href="reviews.php">Reviews</a></li>
            <li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About Us</a></li>
          </ul>
        </nav>
      </header>

      <div class="wrapper">
        <div class="border"></div>
       
		<article class="fullwidth gallery">
          <h3>Gallery</h3>
		  </br>
		   <?php
	$query=mysql_query("select * from tbl_gallery")or die(mysql_error());
	while($row=mysql_fetch_array($query)){
	$id=$row['Photo_ID'];
	?>
	
          <a class="fancyimage" href="admin/<?php echo $row['Photo']; ?>"><img src="admin/<?php echo $row['Photo']; ?>" width="230" height="250" alt="" /> </a> 
		<?php } ?>
		  </article>
		  
		  
		      
        <div class="border2"></div>
        <br>
      </div>
      <footer>
        <div class="border"></div>
		<div class="wrapper">
        <div class="footer-widget">
          <h4>Our Restaurant</h4>
          <p><strong>The Story </strong><br>Our Restaurant's Desserts have established using some of the best available ingredients along with extensive knowledge and skills. 
		  It is located at 27th Lacson Street, Bacolod City, Negros Occidental.My Restaurant will produce and supply a variety of corporate 
		  and private clients, including large restaurants. With quality control staff monitoring production from start to finish and premises 
		  designed with food safety and health, it can produce even fabulous desserts for the ever- growing customers. 
		  <a href="about.php" class="right" style="padding-top:7px"><strong>Continue Reading &raquo;</strong></a>  </p>
        </div>
        </div>
		
        <div class="footer-widget">
         <h4>Site Map</h4><br>
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d980.1256586356194!2d122.9606675531109!3d10.69566026638359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e63341e8baf297!2sArt+District!5e0!3m2!1sen!2s!4v1393956015227" width="320" height="300" frameborder="0" style="border:0"></iframe>	
    </div>
        </div>
        <div class="footer-widget">
          <h4>We Are Social!</h4><br>
          <div id="social"> <a href="https://twitter.com" class="s3d twitter"> Twitter <span class="icons twitter"></span> </a> <a href="https://www.facebook.com" class="s3d facebook"> Facebook <span class="icons facebook"></span> </a> <a href="http://forrst.com" class="s3d forrst"> Forrst <span class="icons forrst"></span> </a> <a href="http://www.flickr.com" class="s3d flickr"> Flickr <span class="icons flickr"></span> </a> <a href="#" class="s3d designmoo"> Designmoo <span class="icons designmoo"></span> </a> </div>
        </div>
        <div class="border2"></div>
        <br />
        <span class="copyright"><span class="left"><br />
        &copy; Copyright 2014 - All Rights Reserved - 
        <br>
        <br />
        </span></span></footer>
    </div>
</body>
</html>