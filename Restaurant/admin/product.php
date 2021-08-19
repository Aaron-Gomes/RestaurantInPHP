<!DOCTYPE html>
<html>
<link rel="icon" href="images/logo.png" type="image" />
<head>
</head>

<body>
 <?php
 include('dbcon.php');
 include('session.php');

 ?>

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
   <li class="active"><a href="product.php">Desserts</a></li>
  <li><a href="drinks.php">Drinks</a></li>
  <li><a href="contacts.php">Contacts</a></li>
  <li><a href="reviews.php">Reviews</a></li>
</ul>
<div class="alert alert-gray">
<h4>Desserts</h4>
	  </div>
	  
 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
 
  <thead>
    <tr>
      <th>Dessert Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Photo</th>
      <th width="180">Action</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
	$query=mysql_query("select * from tbl_desserts")or die(mysql_error());
	while($dessert=mysql_fetch_array($query)){
	$id=$dessert['Dessert_ID'];

	?>
	
    <tr>
      <td><?php echo $dessert['Name']; ?></td>
	  <td><?php echo $dessert['Description']; ?></td>
      <td>&#8369;<?php echo $dessert['Price']; ?></td>
      <td width="100"><img class="img-rounded" src="<?php echo $dessert['Photo']; ?>" width="100"></td>
      <td> <a href="#edit_desserts<?php  echo $id;?>"  data-toggle="modal"  class="btn btn-warning" ><i class="icon-trash pencil-large"></i>&nbsp; Edit</a>
	<a href="#delete<?php echo $id; ?>" a data-toggle="modal" class="btn btn-danger">  <i class="icon-trash icon-large"></i>&nbsp;Delete</a></td>
	
	<?php 
	include('modal_delete_dessert.php');
	?>
	<?php 
	include('modal_edit_products.php');
	?>
	
	
	  <?php } 
	  
?>
    </tr>
	
  </tbody>
  </table>

	  </div> 
	  </div>
	  
	  
	  <?php
	  
	  include('session_sidebar.php');
	  ?>
	   <div class="hero-unit-white1">
	  <a button class="btn btn-mini btn-block btn-success" type="button" href="#adddessert" role="button"  data-toggle="modal"><i class="icon-pencil"></i> Add Desserts</button></a>
	  </div>
	  
	  </div>
    </div>
  </div>
</div>
  </div>
</body>
</html>
<?php include('header.php'); ?>
<?php include('footer.php'); ?>
 <?php
  include('logout_modal.php');
  include('modal_adddesserts.php');
  ?>