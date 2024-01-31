<?php
session_start();
if($_SESSION['euser']=="")
{
	session_destroy();
	header("location:elogin.php");
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
.changepassword
{
	height:300px;
	width:500px;
	margin-top:20px;
	background-color:#7e57c2;
	margin:20px auto auto 400px; 
	
}
body
{
	margin:0px;
	padding:0px;
	background-color:#13262e;
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
<div class="changepassword">
<br/>
<br/>
<br/>
<br/>
<br/>
<table align="center">

<form action="echangecode.php" method="post" align="center">
<tr><td>Old Password</td><td>
 <input type="password" name="op"style="height:35px;width:250px;"/></td></tr>

<tr><td>New Pasword
 </td><td><input type="password" name="np"style="height:35px;width:250px;"/></td></tr>

<tr><td>Confirm New Password
 </td><td><input type="password" name="cnp"style="height:35px;width:250px;"/></td></tr>

<tr><td> </td><td><input type="submit" value="confirm" style="margin-left:50px;height:30px;width:100px;"></td></tr>

</form>
</table>
</div>
</div>
</body>
</html>