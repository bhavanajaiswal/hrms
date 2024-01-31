<?php
session_start();
include("connect.php");
$email=$_SESSION['euser'];
if($_SESSION['euser']=="")
{
	session_destroy();
	header("location:elogin.php?msg=4");
}
$query="select * from tbl_empy where email='$email'";
$res=mysql_query($query);

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$uid=$row['0'];
}
$query2="select * from tbl_leave where emid='$uid'";
$res2=mysql_query($query2);


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
body{
	margin:0px;
	padding:0px;
	background-color:#1E252b;
}
</style>
</head>
<body>
<div id="menu">
<ul>
	<li><a href="eprofile.php"> Home</a></li>
 <li><a href="ask.php">Ask for leave</a></li>
 <li><a href="myleave.php"> My leaves</a></li>
 <li><a href="viewsalary.php"> My Salary</a></li>
 <li><a href="myholidays.php"> My Attendance</a></li>
 <li><a href="updateprofile.php"> Update profile</a></li>
 <li><a href="echange.php">Change password </a></li>
 <li><a href="elogout.php">Logout </a></li>
 
</ul></div>

<table border=3px align="center" style="border-collapse:collapse; margin-top:25px;" width=60%>
	<tr>
		<th>Sr.No</th>
		<th>Date From</th>
		<th> Date To</th>
		<th>Reason</th>
		<th>Status</th>
		<th>Date of Apply</th>
	</tr>
	
	<?php
	$a=1;
	while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
		
	{
		?>
	<tr>
		<td><?php echo $a;?></td>
		<td><?php echo $row2['dfrom'];?></td>
		<td><?php echo $row2['dto'];?></td>
		<td><?php echo $row2['reason'];?></td>
		<td><?php echo $row2['status'];?></td>
		<td><?php echo $row2['doa'];?></td>
	
	
	</tr>
	<?php
	$a++;
	}
	
	?>

</table>



</body>
</html>