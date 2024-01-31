<?php
session_start();
$con=include("connect.php");
if($_SESSION['user']=="")
{
 session_destroy();
header("Location:../index.php"); 

}
if($con==true)
{
	//echo "connection create";
	
}
else
{
	//echo "connection error";
	//die();
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
.outer{
	
	height:695px;
	width:1365px;
	
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
	//text-decoration:none;
	font-family:sans-serif;
	text-align:center;
	border-bottom:2px solid red;
box-shadow:4px 4px 150px lightgrey inset;	
		
}
#right
{
	height:695px;
	width:1165px;
	background-color:lightgray;
	box-shadow:2px 2px 50px red inset;
	float:left;
	
}
.row a
{
	text-decoration:none;
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
				<div class="row" ><h3><a href="attendance.php" style="color:white;">Attendance</a></h3></div>
				<div class="row"><h3><a href="viewsalary.php" style="color:white;">View Salary</a></h3></div>
				<div class="row"><h3><a href="leaves.php" style="color:white;">Leaves</a></h3></div>
				<div class="row"><h3><a href="addnoti.php" style="color:white;">Notification</a></h3></div>
				<div class="row"><h3><a href="logout.php" style="color:white;">Logout</a></h3></div>
				
				
				
			</div>
<div id="right">
			<div id="menu"></div>
<center><table>
<h1> Add Salary</h1>
<form action="sal_code.php" method="post">
<tr><td>
select Department:</td><td>
					<select name="deptid" style="width:200px;height:30px; font-size:15px;">
					<option value="">--select--</option>
					<?php 
					$q_dept="select * from tbl_dpt";
					$res_dept=mysql_query($q_dept);
					while($row_dept=mysql_fetch_array($res_dept,MYSQL_BOTH))
					{
						?>
					<option value="<?php echo $row_dept['dptid'];?>"> <?php echo $row_dept['Department'];?></option>
					<?php
					}
					?>
					
				</select></td></tr><tr>
						<td>Add Paygrade*:</td><td><input type="text" name="paygrade" style="width:200px;height:30px; font-size:15px;"/>.00/-INR(Per Day)</td></tr>
					
				<tr><td></td><td>	<input type="submit" value="Add" style="width:200px;height:30px; font-size:15px;"/></td></tr>
</form>					
</center>
</div>
</div>
</body>



</html>