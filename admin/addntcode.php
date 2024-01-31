<?php
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:../index.php");
}

$addn=$_POST['notic'];
//echo $addn;
include("connect.php");
$query="insert into tbl_noti (notic,date) values('$addn',curdate())";
mysql_query("$query");
//echo "completed";
header("Location:addnoti.php");
?>