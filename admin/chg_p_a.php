<?php
include("connect.php");
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:../index.php");
}
$con=include("connect.php");
if($con==true)
{
	//echo "connection create";
	
}
else
{
	//echo "connection error";
	//die();
}
$att_id=$_REQUEST['att_id'];
echo $att_id;
$query_update="update  tbl_attendance set status='absent' where attd_id='$att_id'";
$check=mysql_query($query_update);
if($check==true)
{
	header("location:addatt.php");
}


  
?>