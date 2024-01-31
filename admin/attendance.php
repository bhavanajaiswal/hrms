<?php
session_start();
if($_SESSION['user']=="")
{
 session_destroy();
header("Location:../index.php"); 

}


?>
<html>
<head>
<style>
body
{
	margin:0px;
	padding:0px;
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
	//text-decoration:none;
	font-family:sans-serif;
	text-align:center;
	border-bottom:2px solid red;
box-shadow:4px 4px 150px lightgrey inset;	
		
}

.row a
{
	text-decoration:none;
}
#right
{
	height:695px;
	width:1149px;
	background-color:lightgray;
	box-shadow:2px 2px 50px red inset;
	float:left;
}
.rohit
{
	height:300px;
	width:430px;
	//border:1px solid;
	margin:100px 350px;
}
.collom{
	height:250px;
	width:200px;
	float:left;
	border:1px solid;
	margin-left:10px;
	box-shadow:2px 2px 30px red inset;
}
a{
	text-decoration:none;
}
</style>
</head>
<body bgcolor="skyblue">
<div class="outer">
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
	<div id="right">
		<div class="rohit">
			<div class="collom"><a href="addatt.php"><h1 style="margin-top:70px" align="center">Add</h1><h2 align="center"> Attendance</h2></a></div>
			<div class="collom"><a href="viewattedance.php"><h1 style="margin-top:70px" align="center">View</h1> <h2 align="center">Attendance</h2></a></div>
		</div>

</div>
</div>
</body>

</html>