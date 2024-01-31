<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
echo $email;
//echo $password;
include("connect.php");
 $query="select * from tbl_admin where email='$email' and password='$password'";
$res=mysql_query($query);

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['user']=$email;
	header("Location:profile.php");
	
}
else
{
	header("Location:../index.php");
	
}

?>