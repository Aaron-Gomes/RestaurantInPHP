
   <aside class="sidebar">
  <?php
	$query=mysql_query("select * from tbl_blogs")or die(mysql_error());
	while($blog=mysql_fetch_array($query)){
	$id=$blog['Blog_ID'];
	?>
      <h3><?php echo $blog['Blog_Title']; ?></h3>
	  <br>
      <center><img src="admin/<?php echo $blog['Photo']; ?>" width="260" alt="" /></center>
      <p> <?php echo $blog['Blog_Content']; ?>
	  <br>
 <?php } ?>  
  </aside>