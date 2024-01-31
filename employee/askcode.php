<?php
session_start();
$dfrom=$_POST['from'];
$dto=$_POST['to'];
//echo $date;
//echo $dateto;
$reason=$_POST['reason'];
//echo $reason;
$email=$_SESSION['euser'];
include("connect.php");
$query=" select * from tbl_empy  where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{ session_destroy();
	$uid=$row['0'];
	
}
$query2="insert into tbl_leave(emid,dfrom,dto,reason,status, doa) values('$uid','$dfrom','$dto','$reason','N',curdate())";
mysql_query($query2);
header("location:eprofile.php");

?>