<div class="span3">  
	   <div class="hero-unit-white1">
	   <i class="icon-calendar"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
						
                        ?>
	  </div>  
	  
	   <div class="hero-unit-white1">
	   Welcome:
	    <?php 
 $User_ID=$_SESSION['User_ID'];
$result=mysql_query("select * from tbl_admin where User_ID='$User_ID'")or die(mysql_error);
$row=mysql_fetch_array($result);

$Full_Name=$row['Full_Name'];

echo $Full_Name; 
  
  ?><br> <a button class="btn btn-mini btn-block btn-info" type="button" href="#myModal" role="button"  data-toggle="modal"><i class="icon-signout"></i> Sign Out</button></a>
  
	  </div>