<?php
//employee profile page
session_start();
$email=$_SESSION['euser'];
if($_SESSION['euser']=="")
	
{
 session_destroy();
header("Location:elogin.php"); 

}
include("connect.php");
$query="select * from tbl_empy where email='$email'";
$res=mysql_query($query);



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
	min-height: 100vh;
            background-image: linear-gradient(120deg,#3498db,#8e44db);
            //background-color:#e8f0fe;
			opacity:.9;
			//box-shadow:2px 2px 50px  inset;
}
.notice
{
	height:50px;
	width:100%;
}
table
{
	height:400px;
}
</style>

</head>
<body bgcolor="#4ca3c7">
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
<div id="middle">
<div class="notice">
<?php
$query2="select * from tbl_noti order by notid desc limit 0,1";
//echo 
$res2=mysql_query($query2);

?>

<?php 
if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
	?>
	
	<div class="notice">
	<span style="font-size:30px">	Notice:* </span>

	 <marquee onmouseover="stop()" onmouseout="start()"><?php echo $row2['notic']?>
	
	</marquee></div>
	
<?php	
}
?>
</div>
<?php
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
	<img src="../admin/upload/<?php echo $row['photo'];?>" height="80px" width="80px" style="margin-left:620px;"/>
	<table border=2px align="center" style="border-collapse:collapse;" width="300px;" >
	
		
	<tr>	<td>name</td>
		<td><?php echo $row['name'];?></td></tr>
		<tr> <td>F'name</td><td><?php echo $row['fname'];?></td></tr>
		<tr><td>gentder</td><td><?php echo $row['gender'];?></td></tr>
		<tr><td>Date of Birth</td><td><?php echo $row['dob'];?></td></tr>
		<tr><td>Email</td><td><?php echo $row['email'];?></td></tr>
		<tr><td>Password</td><td>***************</td></tr>
		<tr><td>Address</td><td><?php echo $row['address'];?></td></tr>
		<tr><td>Mobile No.</td><td><?php echo $row['mobile'];?></td></tr>
		<tr><td>Deparment Name</td><td><?php echo $row['dptid'];?></td></tr>
		
<?php
}
?>

</div>
</body>


</html>