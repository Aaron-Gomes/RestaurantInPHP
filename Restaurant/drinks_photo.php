 <div id="drinksphoto<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel"><?php echo $drinks['Name']; ?></h3>
    </div>
    <div class="modal-body">
  
	    <center> <img src="admin/<?php echo $drinks['Photo']; ?>" class="img-polaroid" width="200" alt=""> </center>
     <div class="alert alert-error">
 <strong>Description:</strong> <?php echo $drinks['Description']; ?>   
</div>

     <div class="alert alert-error">
 <strong>Price:</strong> &#x20B1;<?php echo $drinks['Price']; ?>   
</div>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
    </div>