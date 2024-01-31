<?php
session_start();

if($_SESSION['euser']=="")
{
 session_destroy();
header("Location:elogin.php"); 

}

include("connect.php");
$id=$_POST['id']; //echo $id;
$name=$_POST['name']; //echo $name;
$fname=$_POST['fname']; //echo $fname;
$gender=$_POST['a']; //echo $gender;
$dob=$_POST['dob']; //echo $dob;
$mobile=$_POST['mobile']; //echo $mobile;
$address=$_POST['add'];  //echo $address;
$query="update tbl_empy set name='$name',fname='$fname',gender='$gender',mobile='$mobile',dob='$dob',address='$address' where emid='$id'";
mysql_query($query);
header("Location:eprofile.php");




?>