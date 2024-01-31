<?php
include("connect.php");
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:../index.php");
}
$query2="select * from tbl_noti";
$res2=mysql_query($query2);


?>
<html>
<head>
<style>
body
{
	margin:0px;
	padding:0px;
}
.outer
{
	height:695px;
   width:1365px;
	
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
    height:62.20px;
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
	width:1165px;
	background-color:#4fc3f7;
	box-shadow:2px 2px 50px #8a1d45 inset; 
	float:left;
}
th
{
	background-color:black;
	color:white;
	font-family:rockwell;
	
}
table

{
	cursor:not-allowed;	
}
tr:nth-child(odd)
{
background-color:lightgray;	
text-align:center;
}
tr:nth-child(even)
{

text-align:center;
}
h1{
	text-align:center;
}
</style>
</head>
<body>
<div class="outer">
				<div id="left">
				<div class="row1"><img src="../images/images.jpeg"/></div>
				<div class="row" ><h3><a href="profile.php" style="color:white;">Home</a> </h3> </div>
				<div class="row" ><h3><a href="dpt.php" style="color:white;">Add Department</a> </h3> </div>
				<div class="row" ><h3><a href="empy.php" style="color:white;">Add Employee</a></h3></div>
				<div class="row"><h3><a href="viewemp.php" style="color:white;">View Employee</a></h3></div>
				<div class="row"><h3><a href="addsalary.php" style="color:white;">Salary</a></h3></div>
				<div class="row"><h3><a href="attendance.php" style="color:white;">Attendance</a></h3></div>
				<div class="row" ><h3><a href="viewsalary.php" style="color:white;">View Salary</a></h3></div>
				<div class="row"><h3><a href="leaves.php" style="color:white;">Leaves</a></h3></div>
				<div class="row"><h3><a href="addnoti.php" style="color:white;">Notification</a></h3></div>
				<div class="row"><h3><a href="logout.php" style="color:white;">Logout</a></h3></div>
				
				</div>
<div id="right">
			<div class="top">
			<center>	
		<h1> Add Notice</h1>
		<form action="addntcode.php" method="post" >
		<textarea name="notic" style="width:200px; font-size:20px"> </textarea>
		</br>
		<input type="submit" value="Submit" style="height:40px; width:200px;background-color:black; color:white; font-size:20"/>
		</form></center>
			</div>
			<hr style="background-color:red ; height:2px;"/>
		<div class="bottom">
		<table border="" style="border-collapse:collapse;" width="100%">
		<h1> All Notification</h1>
		<tr>
			<th> Sr.No</th>
		
			<th>Notification </th>
			<th>Date</th>
			<th>Delete</th>
		</tr>
	<?php
	$a=1;
	while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
	{
	?>
		<tr>
			<td><?php echo $a;?></td>
			
			<td><?php echo $row2['notic'];?></td>
			<td><?php echo $row2['date'];?></td>
			<td><a href="noticedelete.php?id=<?php echo $row2['notid']?>">delete</a><td>
			</tr>
	<?php
	$a++;		
	}
	?>
								
		</table>
		</div>
		</div>
</div>
</body>
</html>