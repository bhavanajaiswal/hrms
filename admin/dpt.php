<?php
session_start();
include("connect.php");
$query="select * from tbl_dpt";
$res=mysql_query($query);
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:../index.php");
}

?>
<html>
<head>
<link href="../css/dpt.css" rel="stylesheet" type=""/>
<style>
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
}

</style>
</head>

<body>

<div id="container">
		<div id="menu"> 
				<img src="../images/images.jpeg"/>
		</div>
			<center>
					<div id="middle">
			<div id="left">
				<div class="row" ><h3><a href="profile.php" style="color:white";>Home</a> </h3> </div>
				<div class="row" ><h3><a href="dpt.php" style="color:white";>Add Department</a> </h3> </div>
				<div class="row"><h3><a href="empy.php" style="color:white";>Add Employee</a></h3></div>
				<div class="row"><h3><a href="viewemp.php"style="color:white";>View Employee</a></h3></div>
				<div class="row"><h3><a href="addsalary.php" style="color:white";>Salary</a></h3></div>
				<div class="row"><h3><a href="attendance.php" style="color:white";>Attendance</a></h3></div>
				<div class="row"><h3><a href="viewsalary.php" style="color:white";>View Salary</a></h3></div>
				<div class="row"><h3><a href="leaves.php" style="color:white";>Leaves</a></h3></div>
				<div class="row"><h3><a href="addnoti.php" style="color:white";>Notification</a></h3></div>
				<div class="row"><h3><a href="logout.php" style="color:white";>Logout</a></h3></div>
				
				
			</div>
				<div id="right">
				<div class="adddpt">
				<table align="center">
					<h2>Add Department </h2>
					<tr>
					<form action="dptcode.php" method="post">
							<td>Department name</td>
							<td><input type="text" name="dpt" style="height:40px;width:200px; outline:none; border-radius:25px; font-size:20px;"/></td></tr>
							<tr><td></td>
							<td><input type="submit" value="Add" style="height:40px;width:200px; outline:none; border-radius:25px;"/></td></tr>


					</form>
				</table>
				
				</div>
					<div class="show"><hr style="background-color:red ; height:2px;"/>
			<table border="2px" style="border-rowspan:rowspan;"cellpadding=10px;>
				<tr>
					<th>sr.no</th>
					<th>DepartmentName</th>
					<th>Date</th>
					<th> Delete</th>
					<th> Update</th>
				</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
				<tr>
					<td><?php echo $a?> </td>
					<td><?php echo $row['Department'];?> </td>
					<td><?php echo $row['date'];?> </td>
					<td><a href="dptdelete.php?id=<?php echo $row['dptid']?>">delete</a></td>
					<td><a href="dptupdate.php?id=<?php echo $row['dptid'];?>">update</a></td>
				</tr>


<?php
$a++;
}
?>

			</table>
			</div>
				
				
				</div>
			
		</div>		
</div>
</center>
</body>