<?php 

include('dbcon.php');
$id=$_GET['id'];


mysql_query("delete  from tbl_admin where User_ID='$id'")or die(mysql_error());
header('location:admin.php');
?>