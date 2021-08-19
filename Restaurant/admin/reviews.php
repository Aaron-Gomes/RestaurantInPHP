 <?php
 include('dbcon.php');
 include('session.php');

 ?>
 
 <link rel="icon" href="images/logo.png" type="image" />
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
  <li><a href="contacts.php">Contacts</a></li>
  <li class="active"><a href="reviews.php">Reviews</a></li>
</ul>

<div class="alert alert-gray">
<h4>Reviews</h4>
	  </div>
<legend></legend>
<table class="table table-hover table-condensed table-bordered" id="example">




  <caption></caption>
  <thead>
    <tr>
      <th>Name</th>
      <th>Reviews</th>
      <th width="180">Action</th>
    </tr>
	
  </thead>
  <tbody>
    <?php
	$query=mysql_query("select * from tbl_reviews ORDER by Review_ID DESC")or die(mysql_error());
	while($row=mysql_fetch_array($query)){
	$id=$row['Review_ID'];
	include('modal_delete_reviews.php');
	?>
    <tr>
      <td><?php echo $row['Name'];?></td>
      <td><?php echo $row['Review'];?></td>
      <td width="90"> <a href="#edit_reviews<?php  echo $id;?>"  data-toggle="modal"  class="btn btn-warning" ><i class="icon-trash pencil-large"></i>&nbsp; Edit</a>
	<a data-toggle="modal" href="#<?php echo $id; ?>" class="btn btn-danger">  <i class="icon-trash icon-large"></i>&nbsp;Delete</a></td>
	 <?php include('modal_edit_reviews.php'); ?>
    </tr>
	<?php } ?> 
  </tbody> 
</table>	  


	  </div> 
	  </div>
	  

	  <?php
	  include('session_sidebar.php');
	  ?>
	  <div class="hero-unit-white1">
	  <a button class="btn btn-mini btn-block btn-success" type="button" href="#addreviews" role="button"  data-toggle="modal"><i class="icon-pencil"></i> Add Review</button></a>

	  </div>
	  </div>
    </div>
    </div>
 
</div>
  </div>
</body>

<?php include('header.php'); ?>
<?php   include('footer.php'); ?>
 <?php
  include('logout_modal.php');
  include('modal_addreviews.php');

  ?>
  
  