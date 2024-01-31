<?php
session_start();
$email=$_SESSION['euser'];
//echo $email;
if($_SESSION['euser']=="")
{
	session_destroy();
	header("location:elogin.php?msg=3");
}
$con=include("connect.php");
if($con==true)
{
	//echo "connection created";
}
else
{
	//echo "connection error";
	//die();
}
$email=$_SESSION['euser'];
$query="select * from tbl_empy where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$empid=$row['emid'];
	$depid=$row['dptid'];
	}


?>
<html>
<head>
<style>
#menu
{
height:50px;
width:autopx;
border:1px solid;
background-color:#026efc;
border-radius:5px;

}
#menu ul
{
list-style-type:none;
//margin-left:px;

}
#menu ul li
{
display:inline;
padding:15px;
margin-left:50px;
//border:1px solid;
}
#menu ul li a
{
color:white	;
text-decoration:none;

}
#menu ul li:hover
{
background-color:red;
box-shadow:2px 2px 50px lightgray inset;
border-radius:15px;
}
body
{
	margin:0px;
	padding:0px;
	background-color:#1E252b;
}
th
{
	background-color:black;
	color:white;
	font-family:rockwell;
	
}
tr
{
//background-color:lightgray;	
color:white;
}
.showsalary
{
	margin-top:50px;
	background-color:black;
}
</style>
</head>
<body>
<div id="menu">
<ul>
	<li><a href="eprofile.php">Home</a></li>
 <li><a href="ask.php">Ask for leave</a></li>
 <li><a href="myleave.php"> My leaves</a></li>
 <li><a href="viewsalary.php"> My Salary</a></li>
 <li><a href="myholidays.php"> My Attendance</a></li>
 <li><a href="updateprofile.php"> Update profile</a></li>
 <li><a href="echange.php">Change password </a></li>
 <li><a href="elogout.php">Logout </a></li>
 
</ul></div>

<div class="showsalary">
<table border=3px style="border-collapse:collapse;" width=50% align="center" >
<thead>
<tr>
			<th>Sr.No</th>
			<th>Emp Name</th>
			<th>Department</th>
			<th>Basic Salary</th>
			<th>Calculate($)</th>
		</tr>
		</thead>
		<tbody>
			<?php
			$a=1;
			$query1="select * from tbl_salary";
			$res1=mysql_query($query1);
			while ($row1=mysql_fetch_array($res1,MYSQL_BOTH)) 
			{
				//print_r($row1);
				// [sal_id][depid][paygrade][basic]
				//create a local varible for further use 
				 $sal_id=$row1['sal_id'];
				$depid=$row1['dptid'];
				$paygrade=$row1['paygrade'];
				$basic=$row1['basic'];
				//echo $sal_id;
				//echo $depid;
				//echo $paygrade;
				//echo $basic;
				$query2="select * from tbl_empy where dptid='$depid' and emid='$empid'";
				$res2=mysql_query($query2);
				while ($row2=mysql_fetch_array($res2,MYSQL_BOTH))
				 {
					//print_r($row2); 
					$empid=$row2['emid'];
					$name=$row2['name'];
					$dpid=$row2['dptid'];
					//echo $empid;
					//echo $name;
					//echo $dpid;
					//now make a query to get department name
					$query3="select * from tbl_dpt where dptid='$dpid'";
					$res3=mysql_query($query3);
					 if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
					 {
					 	$deptname=$row3['Department'];  
					 	 //echo $deptname;
					}
					?>					
				<tr>
				<td><?php echo $a;?></td>
				<td><?php echo $name;?></td>
				<td><?php echo $deptname;?></td>
				<td><?php echo $basic;?></td>
				<td><a href="calcsalary.php?empid=<?php echo $empid;?>&dept_id=<?php echo $dpid;?>&paygrade=<?php echo $paygrade; ?>">Calculate</a></td>
			</tr>
			<?php
			$a++;
				}//inner while
			}//outer while
			?>
</tbody>
</table>
</div>
</div>
</body>
</html>



