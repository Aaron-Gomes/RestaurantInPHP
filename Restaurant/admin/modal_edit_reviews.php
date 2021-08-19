
<!-- Modal -->
<div id="edit_reviews<?php echo  $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<div class="alert alert-gray">
	Edit Review
  </div>

<div class="modal-body">
<hr>
                  <form class="form-horizontal" method="POST">
    <div class="control-group">
    <label class="control-label" for="inputEmail">Name</label>
    <div class="controls">
    <input name="id" value="<?php echo $row['Review_ID']?>" type="hidden" id="inputEmail" placeholder="ID">
    <input name="name" value="<?php echo $row['Name']; ?>" type="text" id="inputEmail" placeholder="Name">
    </div>
    </div>
	<div class="control-group">
    <label class="control-label" for="inputPassword">Review:</label>
    <div class="controls">
	<textarea rows="4" class="span10" placeholder="Review" name="rev"><?php echo $row['Review']; ?></textarea>  
    </div>
    </div>
    <div class="control-group">
    <div class="controls">
	 <div class="modal-footer">
	<button name="edit" type="submit" class="btn btn-large btn-warning"><i class="icon-save"></i>&nbsp;Save</button>
	<button class="btn btn-large" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>
    </div>
    </div>
    </div>
    </form>
	
	
			<?php
	if (isset($_POST['edit'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$review = $_POST['rev'];
	
	mysql_query("update tbl_reviews set Name = '$name' , Review = '$review' where Review_ID = '$id' ")or die(mysql_error());
	header('location:reviews.php');
	?>
	
	<?php

	
	}
	?>
	
	
</div>

</div>