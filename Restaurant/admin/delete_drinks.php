<?php 

include('dbcon.php');
$id=$_GET['id'];


mysql_query("delete  from tbl_drinks where Drinks_ID='$id'")or die(mysql_error());
header('location:drinks.php');
?>