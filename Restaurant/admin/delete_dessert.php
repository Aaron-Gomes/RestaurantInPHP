<?php 

include('dbcon.php');
$id=$_GET['dessert'];


mysql_query("delete  from tbl_desserts where Dessert_ID='$id'")or die(mysql_error());
header('location:product.php');
?>