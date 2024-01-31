<?php
session_start();
include("connect.php");
$email=$_SESSION['euser'];
//echo $email;
if($_SESSION['euser']=="")
{
	session_destroy();
	header("location:elogin.php?msg=5");
}
$query="select * from tbl_empy where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$emid=$row['emid'];
	//echo $emid;
	
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
<body bgcolor="lightgray">
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

<table border=2px align="center" style="border-collapse:collapse;" width="50%">
<h1 align="center"> Present</h1>
<tr>

<th> Sr.No</th>
<th>empid</th>

<th> status</th>
<th> Date</th>
<th> Time</th>
</tr>




<?php
$query2="select * from tbl_attendance where emid='$emid'";
$res2=mysql_query($query2);
$a=1;


while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
	if($row2['status']=='present')
	{
	?>
	<tr>
	<td> <?php echo $a?></td>
	
	<td><?php	echo $row['name'];?></td>
	
	
	<td><?php	echo $row2['status'];?></td>
	
	<td><?php	echo $row2['date'];?></td>
	
	<td><?php	echo $row2['time'];?></td>
	
</tr>
<?php
$a++;	
}
}
?>
</table>
<table border="2px" align="center" style="border-collapse:collapse;" width=50%>
<h1 align="center">Absent</h1>
<tr>

<th> Sr.No</th>
<th>empid</th>

<th> status</th>
<th> Date</th>
<th> Time</th>
</tr>

<?php
$query2="select * from tbl_attendance where emid='$emid'";
$res2=mysql_query($query2);
$a=1;


while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
	if($row2['status']=='absent')
	{
	?>
	<tr>
	<td> <?php echo $a?></td>
	
	
	<td><?php	echo $row['name'];?></td>
	
	
	<td><?php	echo $row2['status'];?></td>
	
	<td><?php	echo $row2['date'];?></td>
	
	<td><?php	echo $row2['time'];?></td>
	
</tr>
<?php
$a++;	
}
}
?>
<table>
</body>
</html>