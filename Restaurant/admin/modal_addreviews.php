<div id="addreviews" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
  <div class="alert alert-gray">
  Add Reviews
  </div>
  <div class="modal-body">
  <hr>
 <form class="form-horizontal" method="POST">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Name</label>
    <div class="controls">
      <input type="text" id="inputEmail" name="name" placeholder="Name" required>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Content</label>
    <div class="controls">
 <textarea rows="5" class="span3" required placeholder="Write reviews...." name="content"></textarea>
    </div>
  </div>
  </div>
  
  <div class="modal-footer">
    <button name="save" type="submit" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
      <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
    </form>  
	
	
	  <?php
		if(isset($_POST['save'])){
		$Name=$_POST['name'];
		$Reviews=$_POST['content'];
	
		
		mysql_query("insert into tbl_reviews (Name, Review) values('$Name','$Reviews')")or die(mysql_error());
		header('location:reviews.php');
		
		}
		?>
  </div>
</div>