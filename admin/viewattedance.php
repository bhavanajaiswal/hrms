
<?php
session_start();
 if($_SESSION['user']=="")
 {
	 session_destroy();
	 header("location:../index.php?msg=3");
 }
$set=include("connect.php");
if($set==true)
{
	//echo "time zone set";
}
else
{
	//echo "time zone not set";
}
//echo $set_date;
//echo $set_time;

@$date=$_REQUEST['date'];
//echo $date;
include("connect.php");
?>
<html>
<head>
<title>View Attendance </title>
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
	margin:100px 300px;
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
	text-align:center;
}
tr:nth-child(odd)
{
background-color:lightgray;	
}
</style>

</head>

<body >
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

<center>
<h1>View Attendance</h1>
<div id="outer">
Select DATE
<select name="date_id" id="sel_date" onchange="change_date();">
<option value="">--Select--</option>
<?php
$query_date="select distinct date from tbl_attendance";
$res_date=mysql_query($query_date);

while($row_date=mysql_fetch_array($res_date,MYSQL_BOTH))
{
	?>
	<option value="<?php echo $row_date['date']; ?>"><?php echo $row_date['date'];?></option>
<?php
}
?>
</select></br>

<table id="table_id" border="1" align="center" style="border-collapse:collapse;" width="100%" >
<thead>
<tr>
<th>S.no</th>
<th>employee name</th>
<th>attd_status</th>
<th>date</th>
<th>time</th>
</tr>
</thead>
<tbody>
<?php
$query_info="select * from tbl_attendance where date='$date' and status='present'";
$res_info=mysql_query($query_info);
$a=1;
while($row_info=mysql_fetch_array($res_info,MYSQL_BOTH))
{
?>
	<tr>
		<td><?php echo $a;?></td>
		<td><?php $id= $row_info['1'];
			$query2="select * from tbl_empy where emid='$id'";	
			$res1=mysql_query($query2);
			if($row1=mysql_fetch_array($res1,MYSQL_BOTH))
			{
				?>
				<?php echo $row1['name']?>
				<?php
			}
		?></td>
		<td><?php echo $row_info['2']?></td>
		<td><?php echo $row_info['3']?></td>
		<td><?php echo $row_info['4']?></td>
	</tr>
	<?php
	$a++;
}
?>
</tbody>
</table>
</div>
</center>
<script>
function change_date()
{
	var date=document.getElementById("sel_date");
	//alert(date.value);
	var date_id=date.value;
	//addattendance.php?date_id=
	window.location.href="viewattedance.php?date="+date_id;
}
</script>
</div>
</div>
</body>
</html>
