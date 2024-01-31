<?php
include("connect.php");
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:../index.php");
}
header("Location:dpt.php");
$id=$_POST['id'];
echo $id;
$dpt=$_POST['dpt'];
echo $dpt;
include("connect.php");
$query="update tbl_dpt set  Department='$dpt' where dptid='$id'";

mysql_query($query);


?>