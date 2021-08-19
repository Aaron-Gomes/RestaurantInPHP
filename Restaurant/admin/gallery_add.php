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
  <li class="active"><a href="gallery_add.php">Gallery</a></li>
   <li><a href="product.php">Desserts</a></li>
  <li><a href="drinks.php">Drinks</a></li>
  <li><a href="contacts.php">Contacts</a></li>
  <li><a href="reviews.php">Reviews</a></li>
</ul>

<div class="alert alert-gray">
<h4>Gallery</h4>
	  </div>
 
 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

  <caption></caption>
 
  <thead>
    <tr>
      <th>Photos</th>
      <th width="180">Action</th>
    </tr>
  </thead>
  <?php
	$query=mysql_query("select * from tbl_gallery")or die(mysql_error());
	while($row=mysql_fetch_array($query)){
	$id=$row['Photo_ID'];
	?>
  <tbody>
    <tr>
      <td><img class="img-rounded" src="<?php echo $row['Photo']; ?>" width="200" height="100"></td>
         <td width = "180">
		 <a href="#edit_photo<?php  echo $id;?>"  data-toggle="modal"  class="btn btn-warning" ><i class="icon-trash pencil-large"></i>&nbsp; Edit</a>
	<a data-toggle="modal" href="#<?php echo $id; ?>" class="btn btn-danger">  <i class="icon-trash icon-large"></i>&nbsp;Delete</a>
<?php
include('modal_delete_photo.php');
include('edit_photos.php');
?>
		 </td>

    </tr>
  </tbody>
  <?php } ?>
</table>

	  </div> 
	  
	  </div>
	  
	  <?php
	  include('session_sidebar.php');
	  ?>
	   <div class="hero-unit-white1">
	  <a button class="btn btn-mini btn-block btn-success" type="button" href="#addphotos" role="button"  data-toggle="modal"><i class="icon-pencil"></i> Add Photos</button></a>

	  </div>
	  
	  </div>
    </div>
  </div>
</div>
  </div>
</body>
<?php include('header.php'); ?>
<?php include('footer.php'); ?>
 <?php
  include('logout_modal.php');
  include('modal_addphotos.php');
  ?>
  
  
