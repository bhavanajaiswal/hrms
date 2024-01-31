<?php
session_start();
include("connect.php");
$query="select * from tbl_empy";
$res=mysql_query($query);
//header("Location:code.php");

if($_SESSION['user']=="")
{
	session_destroy();
	header("location:../index.php");
}

?>
<html>
<head>
<link href="../css/viewemp.css" rel="stylesheet" type=""/>
<style>
th
{
	background-color:black;
	color:white;
	font-family:rockwell;
	
}

tr:nth-child(even)
{
background-color:lightgray;	
}
</style>
</head>

<body >
<div id="container"><div class="outer" style="position:fixed; float:left;">
		<div id="menu"> 
					<img src="../images/images.jpeg"/>
				</div>
		<div id="middle" >
			<div id="left">
				<div class="row"><h3><a href="profile.php" style="color:white;">Home</a> </h3> </div>
				<div class="row"><h3><a href="dpt.php" style="color:white;">Add Department</a> </h3> </div>
				<div class="row"><h3><a href="empy.php" style="color:white;">Add Employee</a></h3></div>
				<div class="row" ><h3><a href="viewemp.php" style="color:white;">View Employee</a></h3></div>
				<div class="row"><h3><a href="addsalary.php" style="color:white;">Salary</a></h3></div>
				<div class="row"><h3><a href="attendance.php" style="color:white;">Attendance</a></h3></div>
				<div class="row"><h3><a href="viewsalary.php" style="color:white;">View Salary</a></h3></div>
				<div class="row"><h3><a href="leaves.php" style="color:white;">Leaves</a></h3></div>
				<div class="row"><h3><a href="addnoti.php" style="color:white;">Notification</a></h3></div>
				<div class="row"><h3><a href="logout.php" style="color:white;">Logout</a></h3></div>
				
				
			</div></div></div>
			<div id="right" style="float:right; width:;">

<table border="2px" style="border-collapse:collapse;" width=100%;>

<tr style="height:50px;">
<th>sr.no</th>
<th>EmployeeName</th>
<th> F'name</th>
<th> gender</th>
<th> DOB</th>
<th> Email</th>
<th> Mobile</th>
<th> Password</th>
<th> Address</th>
<th>Department </th>
<th>Date</th>

<th> photo</th>
<th>Delete</th>
</tr>

<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
<tr>
<td><?php echo $a?> </td>
<td><?php echo $row['name'];?> </td>
<td><?php echo $row['fname'];?> </td>
<td><?php echo $row['gender'];?> </td>
<td><?php echo $row['dob'];?> </td>
<td><?php echo $row['email'];?> </td>
<td><?php echo $row['mobile'];?> </td>
<td><?php echo $row['password'];?> </td>
<td><?php echo $row['address'];?> </td>
<td><?php echo $row['dptid'];?> </td>
<td><?php echo $row['date'];?> </td>

<td><img src="upload/<?php echo $row['photo'];?>" height="50px" width="50px"/></td>
<td><a href="viewempdelete.php?id=<?php echo $row['emid'];?>">Delete </a></td>
</tr>
<?php
$a++;
}
?>

</table>
</div>		
</div>
</body>