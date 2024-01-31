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
.showdata
{
	height:auto;
	//width:1160px;
	border:3px solid black;	
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
		<center>
		<h1>Bulk Salary</h1>


			<div class="showdata">
					<table border="" style="border-collapse:collapse;" width="100%">
			<thead>
				<tr>
				<th> Sr.No</th>
				<th> Emp Name</th>
				<th> Department</th>
				<th> Basic Salary</th>
				<th>Calcylate($)</th>
				
			</tr>	
			</tbody>
			<?php
			$query="select *from tbl_salary";
			$res=mysql_query($query);
			$a=1;
			while($row=mysql_fetch_array($res,MYSQL_BOTH))
			{
				//print_r($row);
				// [sal_id][dptid][paygrade][basic] 
				//create a local variable for further user_error
				 $sal_id=$row['sal_id'];
				$depid=$row['dptid'];
				 $paygrade=$row['paygrade'];
				$basic=$row['basic'] ;
				//echo $sal_id;
				//echo  $depid;
				//echo $paygrade;
				//echo $basic;
				$query2="select * from tbl_empy where dptid='$depid'";
				
				$res2=mysql_query($query2);
				while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
				{
					//print_r($row2);
					// [emid][name] [fname] [gender][dob] [email] [mobile]  [password][address] [dptid][photo] [date] 
					$empid=$row2['emid'];
					$name=$row2['name'] ;
					 $depid=$row2['dptid'];
					 // echo $empid;
					 // echo $name;
					 // echo $depid;
					 //now make a query to get department Nmae;
					 $query3="select * from tbl_dpt where dptid='$depid'";
					 $res3=mysql_query($query3);
					 if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
					 {
						$deptname=$row3['Department']; 
						//echo $deptname;
					 }
					 ?>
					 <tr>
						<td><?php echo $a;?> </td>
						<td><?php echo $name;?> </td>
						<td><?php echo $deptname;?> </td>
						<td><?php echo $basic;?> </td>
						<td><a href="calcsalary.php?emid=<?php echo $empid; ?>&dpt_id=<?php echo $depid;?>&paygrade=<?php echo $paygrade; ?>">Calculator </td>
					 
					 </tr>
					 
					 <?php
					 $a++;
				}
			}
			
			?>
			
			<tbody>
			</tbody>
				
		</table>
	</div>
</center>
</div>
</div>
</body>

</html>