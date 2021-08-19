 <?php
 include('dbcon.php');
 include('session.php');

 ?>
 <?php include('header.php'); ?>
  <div class="container">
  <br>
<div class="alert alert-info">

  <a href="#"> Welcome:
<strong>
 
  </strong></a> <a href="#"><i class="icon-heart"></i></a>
 
  <br>
</div>  
 <div class="row-fluid">
  <div class="span12">

    <div class="row-fluid">
      <div class="span12">
	 <div class="span9">
	   <div class="hero-unit-white1">
      <ul class="nav nav-tabs">
  <li><a href="admin.php">Admin</a></li>
  <li><a href="blogs.php">Blogs</a></li>
    <li><a href="gallery_add.php">Gallery</a></li>
  <li><a href="product.php">Desserts</a></li>
  <li><a href="drinks.php">Drinks</a></li>
  <li  class="active"><a href="#">Contacts</a></li>
  <li><a href="reviews.php">Reviews</a></li>
  
</ul>

<div class="alert alert-gray">
<h4>Messages</h4>
	  </div>	
<legend></legend>
 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">




  <caption></caption>
  <thead>
    <tr>
      <th>Name</th>
      <th>Subject</th>
      <th>Email</th>
	   <th width="200">Message</th>
      <th>Date and Time</th>
      <th>Action</th>
    </tr>
	
  </thead>
  <tbody>
    <?php
	$query=mysql_query("select * from tbl_contacts")or die(mysql_error());
	while($row=mysql_fetch_array($query)){
	$id=$row['Name_ID'];
	include('modal_delete_contacts.php');
	?>
    <tr>
      <td><?php echo $row['Name'];?></td>
      <td><?php echo $row['Subject'];?></td>
      <td><?php echo $row['Email'];?></td>
	  <td><?php echo $row['Message'];?></td>
	  <td width="100"><?php echo $row['Date_and_Time'];?></td>
	  <td width="100">
	<a data-toggle="modal" href="#<?php echo $id; ?>" class="btn btn-danger">  <i class="icon-trash icon-large"></i>&nbsp;Delete</a></td>
    </tr>
	<?php } ?> 
  </tbody> 
</table>	  


	  </div> 
	  </div>
	  

	  <?php
	  include('session_sidebar.php');
	  ?>
	  </div>
    </div>
    </div>
 
</div>
  </div>
</body>

<?php   include('footer.php'); ?>
 <?php
  include('logout_modal.php');
  ?>
  