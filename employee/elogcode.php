<?php
session_start();
$email=$_POST['email'];
echo $email;
$password=$_POST['password'];
echo $password;
include("connect.php");
$query="select * from tbl_empy where email='$email' and password='$password'";
$res=mysql_query($query);
if($res=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['euser']=$email;
	header("Location:eprofile.php");
}
else
{
	header("location:elogin.php");
}


?>