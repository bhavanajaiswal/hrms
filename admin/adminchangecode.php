<?php
session_start();
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];


$email=$_SESSION['user'];
include("connect.php");
$query="select password from tbl_admin where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pp=$row['password'];
}
if($pp==$op)
{
	if($op==$np)
	{
		echo "no change";
		header("Location:adminchange.php");
		
		
	}
	else if($np==$cnp)
	{
		//echo "change hoga";
		$query2="update tbl_admin set password='$cnp' where email='$email'";
		mysql_query($query2);
		session_destroy();
		header("Location:profile.php?msg=4");
		
	}
	else
	{
			header("Location:adminchange.php");
			echo "no change";
		
	}		
}
else
{
	header("Location:adminchange.php");
}

?>
