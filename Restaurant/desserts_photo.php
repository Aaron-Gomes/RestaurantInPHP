 <div id="dessertphoto<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel"><?php echo $dessert['Name']; ?></h3>
    </div>
    <div class="modal-body">
  
	    <center> <img src="admin/<?php echo $dessert['Photo']; ?>" class="img-polaroid" width="250" alt=""> </center>
     <div class="alert alert-error">
 <strong>Description:</strong> <?php echo $dessert['Description']; ?>   
</div>

     <div class="alert alert-error">
 <strong>Price:</strong> &#x20B1;<?php echo $dessert['Price']; ?>   
</div>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
    </div>