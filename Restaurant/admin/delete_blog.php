<?php 

include('dbcon.php');
$id=$_GET['id'];


mysql_query("delete  from tbl_blogs where Blog_ID='$id'")or die(mysql_error());
header('location:blogs.php');
?>