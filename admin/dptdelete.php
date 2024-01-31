<?php
$id=$_REQUEST['id'];
//echo $id;
include("connect.php");

$query="delete from tbl_dpt where dptid='$id'";	
mysql_query($query);
header("Location:dpt.php");																																		
?>