<div id="addblog" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
  <div class="alert alert-gray">
  Add Blogs
  </div>
  <div class="modal-body">
  <hr>
 <form class="form-horizontal" method="POST" enctype="multipart/form-data">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Blog Title</label>
    <div class="controls">
      <input type="text" id="inputEmail" name="title" placeholder="Blog Title" required class="span3">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Content</label>
    <div class="controls">
<textarea rows="5" class="span3" required placeholder="Write your blogs here..!" name="content"></textarea>    </div>
  </div>
  
  <div class="control-group">
                                    <label class="control-label" for="input01">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image" class="font"> 
                                    </div>
                                </div>
  
   
 

  </div>
  <div class="modal-footer">
    <button name="addblogs" type="submit" class="btn btn-success"><i class="icon-pencil"></i>&nbsp;Post</button>
      <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
    </form>  
  </div>
</div>

 <?php
		if(isset($_POST['addblogs'])){
		$title=$_POST['title'];
		$content=$_POST['content'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $Photo = "upload/" . $_FILES["image"]["name"];
		
		
		mysql_query("insert into tbl_blogs (Blog_Title, Blog_Content, Photo) values('$title','$content','$Photo')")or die(mysql_error());
		header('location:blogs.php');
		
		
		}
		?>