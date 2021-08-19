
<!-- Modal -->
<div id="post<?php echo  $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<div class="alert alert-gray">
	Add Reviews
  </div>

	
  <div class="modal-body">
  
 <form class="form-horizontal" method="POST">
  <div class="control-group">
    <label class="control-label" for="inputEmail"><strong>Name:</strong> <?php echo $row['Name']; ?></label>
    <div class="controls">
      <input type="hidden" id="inputEmail" name="name" Value="<?php echo $row['Name']; ?>" required>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword"><strong>Content:</strong> <?php echo $row['Message']; ?></label>
    <div class="controls">
	      <input type="hidden" id="inputEmail" name="content" Value="<?php echo $row['Message']; ?>" required>

    </div>
  </div>
  </div>
  
  <div class="modal-footer">
    <button name="repost" type="submit" class="btn btn-success"><i class="icon-save"></i>&nbsp;Repost</button>
      <button class="btn"  data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
    </form>  
	</div>
	
	  <?php
		if(isset($_POST['repost'])){
		$Name=$_POST['name'];
		$Reviews=$_POST['content'];
	
		
		mysql_query("insert into tbl_reviews (Name, Review) values('$Name','$Reviews')")or die(mysql_error());
		header('location:reviews.php');
		
		}
		?>
	
	
	
	
</div>

</div>