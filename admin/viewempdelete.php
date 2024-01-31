<?php
$id=$_REQUEST['id'];
//$echo $id;
include("connect.php");
$query="delete from tbl_empy where emid='$id'";
$res=mysql_query($query);
header("Location:viewemp.php");

?>