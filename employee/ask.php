<?php
session_start();
if($_SESSION['euser']=="")
{
	session_destroy();
	header("location:elogin.php?msg=1");
}

?>
<html>
<head>
<style>
body{
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
.form
{
height:90%;
width:100%;
background-color:#4ca3c7;	
}
.showdata
{
	height:auto;
	width:auto;
	//border:3px solid black;
margin-top:40px;	
}
th
{
	background-color:black;
	color:white;
	font-family:rockwell;
	
}
//table

{
	cursor:not-allowed;	
}
td:nth-child(odd)
{
background-color:lightgray;	
}
</style>

</head>
<body bgcolor="black">
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
 
</ul>
</div>
<div class="form">
<center>
<h1 style="font-size:50px">Apply For Leave</h1>
<div class="showdata">

</div>

<table border=3px style="border-collapse:collapse;" width=300px>
<form action="askcode.php" method="post">
<tr>
	<th>Date To</th>
	<th>Date Till</th>
	<th>Reason</th>
	</tr>
<tr>
	<td>
	<input type="date" name="from" style="height:40px;width:200px; outline:none;border:none; font-size:15px"/></td>

	<td>
	<input type="date" name="to" style="height:40px;width:200px; outline:none;border:none; font-size:15px"/></td>
	<td>
	<textarea name="reason"style="height:40px;width:200px; outline:none;border:none;font-size:15px;font-family:rockwell;"></textarea></td></tr>

</table>	
	
	<input type="submit" value="APPLY"style="height:40px;width:400px; outline:none;border:none;font-size:15px; background-color:#000000;color:white;"/>
<form>

</div>

</body>
</html>