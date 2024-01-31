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
date_default_timezone_set("Asia/Kolkata");
$set_date=date('d-m-Y');
//echo $set_date;
$set_time=date('h:i:s');
//echo $set_time;
@$dept_id=$_REQUEST['dept_id'];
//echo $dept_id;
//--code for getting the records of all employee's whose deparment is selected.
$query_info="select *from tbl_empy where dptid='$dept_id'" ;
$res_info=mysql_query($query_info);
while($row_info=mysql_fetch_array($res_info,MYSQL_BOTH))
{
	//print_r($row_info);
	//emid
	$empid=$row_info['emid'];
	
	$insert="insert into tbl_attendance(emid,date,time) values('$empid','$set_date','$set_time')";
	$check=mysql_query($insert);
	// exception handling
	if($check==false)
	{
		echo "<script>alert('Attendance Already Marked!');</script>";
		break;
	}
}



?>
<html>
<head>
<style>
.showdata
{
	height:auto;
	//width:;
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
}
.outer
{
	
	height:695px;
	width:1365px;	
}
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
	width:1165px;
	background-color:lightgray;
	box-shadow:2px 2px 50px red inset;
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
				<div class="row" ><h3><a href="attendance.php" style="color:white;">Attendance</a></h3></div>
				<div class="row"><h3><a href="viewsalary.php" style="color:white;">View Salary</a></h3></div>
				<div class="row"><h3><a href="leaves.php" style="color:white;">Leaves</a></h3></div>
				<div class="row"><h3><a href="addnoti.php" style="color:white;">Notification</a></h3></div>
				<div class="row"><h3><a href="logout.php" style="color:white;">Logout</a></h3></div>
				
				
				
			</div>




	<div id="right">
<center>
<h1>Add Attendance</h1>
Select Department:<select id="sel_dept" onchange="changedept()">
					
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
				
					
					
					
				</select>


	<div class="showdata">
		<table border="1" style="border-collapse:collapse;" width=100%>
			<thead>
			<tr>
				<th> Sr.No</th>
				<th> Emp Name</th>
				<th> Department</th>
				<th> Cur.Attendance</th>
				<th>Update Attendance</th>
				<th>Date</th>
				<th>Time</th>
			</tr>	
			</thead>
				<tbody>
					<?php
						
						$res1=mysql_query("select * from tbl_attendance where date='$set_date'");
						
						$a=1;
						while($row1=mysql_fetch_array($res1,MYSQL_BOTH))
						{
							?>
							<tr>
						<td><?php echo $a;?></td>
								<td>
								<?php $id= $row1['emid'];
									 $query2="select * from tbl_empy where emid='$id'";	
								$res2=mysql_query($query2);
			
							if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
								{
									
										echo $row2['name'];
										$depart=$row2['dptid'];
								
										
								
								?>
								
								
								</td>
								<td>
							<?php 
							$q_depid="select * from tbl_dpt where dptid='$depart'";
							$res_depid=mysql_query($q_depid);
							if($row_depid=mysql_fetch_array($res_depid,MYSQL_BOTH))
							{
								echo $row_depid['Department'];
							
							}
								
							?>	
								</td>
								<td><?php $status=$row1['status'];?>
									<?php
									if($status=="present")
									{
										?>
									
									<img src="../images/bluetick.png" height="20px" width="20px"/>
										<?php
									}
									else{
										?>
										<img src="../images/redcross.png" height="20px" width="20px"/>
									<?php
									} 
									?>
								</td>
								<td>
								<?php
								if($status=="absent")
								{
									?>
								<a href="chg_a_p.php?att_id=<?php echo $row1['attd_id'];?>" style="text-decoration:none; color:blue;"> present</a>
								<?php
								}
								else
								{//status=present
									?>
									<a href="chg_p_a.php?att_id=<?php echo $row1['attd_id'];?>" style="text-decoration:none; color:red;"> absent</a>
								<?php
								}
								?>
								<td><?php echo $row1['date'];?></td>
								<td><?php echo $row1['time'];?></td>
							</tr>
							
						<?php  
						$a++;
						}
						}
						
						?>
				</tbody>
		</table>
	</div>
</center>

<script>
var sel_dept=document.getElementById("sel_dept");
function changedept()
{
	var deptid=sel_dept.value
	//alert(deptid);
	// now make query string
	//addatt.php?dept_id=
	window.location.href='addatt.php?dept_id='+deptid;
}
</script>
</div>
</div>
</body>
</html>