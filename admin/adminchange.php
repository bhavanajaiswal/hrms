<?php
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:../index.php");
}

?>
<html>
<head>
<style>
.showdata
{
	height:auto;
	width:auto;
	//border:3px solid black;	
}

td:nth-child(odd)
{
background-color:lightgray;	
}
body
{
	margin:0px;
	padding:0px;
	
}
.outer{
	
	height:0px auto;
	width:auto;
	border:1px solid;
	
}
#menu
{
	height:50px;
	width:100%;
	//border:2px solid;
	background-color:green;
}
#left
{
	height:695px;
	width:200px;
	float:left;
	background-color:black;
}
.row
{
    height:62.45px;
	width:200px;
	border:.1px solid transparent;
	text-decoration:none;
	font-family:sans-serif;
	text-align:center;
	border-bottom:2px solid red;
box-shadow:4px 4px 150px lightgrey inset;	
		
}
.row a
{
	text-decoration:none;
}
.right
{
	height:695px;
	width:1147px;
	background-color:lightgray;
	box-shadow:2px 2px 50px red inset;
	float:left;
	

</style>
</head>
<body bgcolor="lightgray">
<div id="left">
				<div class="row1"><img src="../images/images.jpeg"/></div>
				<div class="row" ><h3><a href="profile.php" style="color:white;">Home</a> </h3> </div>
				<div class="row" ><h3><a href="dpt.php" style="color:white;">Add Department</a> </h3> </div>
				<div class="row" ><h3><a href="empy.php" style="color:white;">Add Employee</a></h3></div>
				<div class="row"><h3><a href="viewemp.php" style="color:white;">View Employee</a></h3></div>
				<div class="row"><h3><a href="addsalary.php" style="color:white;">Salary</a></h3></div>
				<div class="row" ><h3><a href="attendance.php" style="color:white;">Attendance</a></h3></div>
				<div class="row"><h3><a href="viewsalary.php" style="color:white;">View Salary</a></h3></div>
				<div class="row"><h3><a href="leaves.php" style="color:white;">Leaves</a></h3></div>
				<div class="row"><h3><a href="addnoti.php" style="color:white;">Notification</a></h3></div>
				<div class="row"><h3><a href="logout.php" style="color:white;">Logout</a></h3></div>
				
				
				
			</div>
<div class="right">

<center>
<div class="showdata">
<table border=3px style="border-collapse:collapse; margin-top:9%;" width=500px >

<form action="adminchangecode.php" method="post">
<tr><td>
Current password</td><td>
<input type="password" name="op" style="height:40px;width:400px; outline:none;border:none; font-size:25px;" placeholder="Current pasword"/></td></tr>
<tr><td>
New pasword</td><td>
<input type="password" name="np" style="height:40px;width:400px; outline:none;border:none; font-size:25px;" placeholder="New Password"/></td></tr>
<tr><td>
Confirm New Password</td><td>
<input type="password" name="cnp" style="height:40px;width:400px; outline:none;border:none;font-size:25px;" placeholder="Confirm New Password"/></td></tr>
</table>
<input type="submit" value="Change Password" style="height:40px;width:500px; outline:none;border:2px solid; background-color:red;font-size:25px;"/>
</form>
</div>
</center>
</div>
</body>
</html>