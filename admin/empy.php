<?php
include("connect.php");
session_start();

$query="select * from tbl_dpt";
$res=mysql_query("$query");
  
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


tr:nth-child(even)
{
//background-color:lightgray;	
box-shadow:2px 2px 10px lightblue inset;
}

tr:nth-child(odd)
{
//background-color:orange;
box-shadow:2px 2px 10px lightblue inset;	
}
.log
{
	height:50px;
	float:right;
}
.Logo
{
	heigth:auto;
	width:auto;
	float:left;
}
.margin
{
	margin-left:45%;
}
</style>
</head>
<body>

<div id="container">
		<div id="menu"> <div class="Logo">
				<img src="../images/images.jpeg"/></div>
				<marquee></marquee>
		</div>
		<div id="middle">
			<div id="left">
				<div class="row" ><h3><a href="profile.php" style="color:white;">Home</a> </h3> </div>
				<div class="row" ><h3><a href="dpt.php" style="color:white;">Add Department</a> </h3> </div>
				<div class="row" ><h3><a href="empy.php" style="color:white;">Add Employee</a></h3></div>
				<div class="row"><h3><a href="viewemp.php" style="color:white;">View Employee</a></h3></div>
				<div class="row"><h3><a href="addsalary.php" style="color:white;">Salary</a></h3></div>
				<div class="row"><h3><a href="attendance.php" style="color:white;">Attendance</a></h3></div>
				<div class="row"><h3><a href="viewsalary.php" style="color:white;">View Salary</a></h3></div>
				<div class="row"><h3><a href="leaves.php" style="color:white;">Leaves</a></h3></div>
				<div class="row"><h3><a href="addnoti.php" style="color:white;">Notification</a></h3></div>
				<div class="row"><h3><a href="logout.php" style="color:white;">Logout</a></h3></div>	
			</div>
			<div id="right">
		
<table border="2px" style="border-collapse:collapse; margin-left:25%;" width=50% align height=95%;>
<form action="emcode.php" method="post" enctype="multipart/form-data">
<tr><td style="margin-left:200px;"><span class="margin">Name</span></td>
<td><input type="text" name="name" required value="" style="height:30px;"/></td></tr>
<tr><td><span class="margin">F'name</span></td>
<td>
<input type="text" name="fname" required value="" style="height:30px;"/></td></tr>
<tr><td>

<span class="margin">Gender</span></td><td>
<input type="radio" name="a" value="male">male
<input type="radio" name="a" value="female">female</td></tr>
<tr><td><span class="margin">D.O.B</span></td><td>
<input type="date" name="dob" required value="" style="height:30px;"/></td></tr>
<tr><td><span class="margin">Email</span></td><td>
<input type="email" name="email" required value="" style="height:30px;"/></td></tr>
<tr><td><span class="margin">Password</span></td><td>
<input type="password" name="password" required value="" style="height:30px;"/></td></tr>
<tr><td>
<span class="margin">
mobile</span></td><td>
<input type="number" name="mobile" required value="" style="height:30px;"/></td></tr>
<tr>
<td><span class="margin">Address</span></td><td>
<textarea name="add" required value=""></textarea></td></tr>
<tr><td><span class="margin">Department</span></td><td>
<select name="dpt" required value="">


<option value="">--selectdepartment-- </option>
<?php
$b=1;
while( $row=mysql_fetch_array($res,MYSQL_BOTH))
{

?>
<option value="<?php echo $row['dptid'];?>"><?php echo $row['Department']?></option>

<?php
}
$b++;
?>
</select></td></tr>
<tr><td><span class="margin; margin-left:50%;">Upload Photo</span></td><td>
<input type="file" name="file"/></td></tr>
</table>
<center>
<input type="submit" value="Register" style="height:30px; width:80px;"/>
</form>
</center>
</div>	
		

		</div>
</div>

</body>
</html>