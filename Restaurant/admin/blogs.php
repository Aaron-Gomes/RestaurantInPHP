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
  <li class="active"><a href="blogs.php">Blogs</a></li>
  <li><a href="gallery_add.php">Gallery</a></li>
   <li><a href="product.php">Desserts</a></li>
  <li><a href="drinks.php">Drinks</a></li>
  <li><a href="contacts.php">Contacts</a></li>
  <li><a href="reviews.php">Reviews</a></li>
</ul>

<div class="alert alert-gray">
<h4>Side Bar Blogs</h4>
	  </div>

<table class="table table-bordered" id="example">
  <caption></caption>
   <thead>
    <tr>
      <th>Blog Title</th>
      <th>Content</th>
      <th>Photo</th>
      <th width="180">Action</th>
    </tr>
  </thead>
 
  <tbody>
    <?php
	$query=mysql_query("select * from tbl_blogs")or die(mysql_error());
	while($row=mysql_fetch_array($query)){
	$id=$row['Blog_ID'];
	 include('modal_delete_blog.php');
	?>
	
  
    <tr>
      <td><?php echo $row['Blog_Title']; ?></td>
      <td><?php echo $row['Blog_Content']; ?></td>
      <td><img src="<?php echo $row['Photo']; ?>"  width="180"/></td>
     	<td> <a href="#edit_blog<?php  echo $id;?>"  data-toggle="modal"  class="btn btn-warning" ><i class="icon-trash pencil-large"></i>&nbsp; Edit</a>
	<a data-toggle="modal" href="#delete_blogs<?php echo $id; ?>" class="btn btn-danger">  <i class="icon-trash icon-large"></i>&nbsp;Delete</a>
	 <?php include('modal_edit_blog.php'); ?>
	</td>
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
	  <a button class="btn btn-mini btn-block btn-success" type="button" href="#addblog" role="button"  data-toggle="modal"><i class="icon-pencil"></i> Add Blogs</button></a>

	  </div>
	  
	  </div>
    </div>
  </div>
</div>
  </div>
   
</body>

<?php   include('footer.php'); ?>

 <?php
  include('logout_modal.php');
    include('modal_addblogs.php');

  ?>
  
  
  
  