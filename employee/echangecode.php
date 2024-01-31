<?php
session_start();

$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];


$email=$_SESSION['euser'];
include("connect.php");
$query="select password from tbl_empy where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pp=$row['password'];
}
if($pp==$op)
{
	if($op==$np)
	{
		//echo "no change";
		echo "<script>alert('successfully password not change');</script>";
	}
	else if($np==$cnp)
	{
		//echo "change hoga";
		$query2="update tbl_empy set password='$cnp' where email='$email'";
		mysql_query($query2);
		session_destroy();
		echo "<script>alert('successfully password change');</script>";
		header("Location:elogin.php?msg=4");
		
	}
	else
	{
		echo "<script>alert('successfully password not change');</script>";
		 header("Location:echange.php");
	}		
}
else
{
	echo "<script>alert('successfully password not change');</script>";
	header("Location:echange.php");
}

?>