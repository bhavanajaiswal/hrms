<?php
session_start();

if($_SESSION['user']=="")
{
 session_destroy();
header("Location:../index.php"); 

}
$id=$_REQUEST['id'];
include("connect.php");
$query="select * from tbl_dpt where dptid='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
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
	width:1165px;
	background-color:#4fc3f7;
	box-shadow:2px 2px 50px #8a1d45 inset; 
	float:left;
}

table

{
	cursor:not-allowed;	
}
tr:nth-child(odd)
{
background-color:lightgray;	
}
.bottom
{
	height:auto;
	width;auto;
	
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
				
		<table align="center" style="margin-top:9%">
			<div class="show">
				<form action="dptedit.php" method="post">

					<input type="hidden" name="id" value="<?php echo $row['dptid'];?>"/>
						<tr><td>
						Department Name</td><td>
							<input type="text" name="dpt" value="<?php echo $row['Department']; ?>" style="height:40px;width:200px; outline:none; border-radius:25px; font-size:20px;"/></td></tr>
							<tr></td><td><td>
							<input type="submit" value="Update" style="height:40px;width:200px; outline:none; border-radius:25px; font-size:20px;"/></td></tr>
				</form>	
		</table>
	</div>
	</div>
</body>
</html>


<?php
}
?>