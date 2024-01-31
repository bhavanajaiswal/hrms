
<?php
session_start();
//echo "welcome EPPLOYEE";
$email=$_SESSION['euser'];
 //echo $email;
if($_SESSION['euser']=="")
{
	session_destroy();
	header("Location:elogin.php");
}
//echo $email=$_REQUEST['email'];
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
body{
	margin:0px;
	padding:0px;
}
th
{
	background-color:black;
	color:white;
	font-family:rockwell;
	
}

tr:nth-child(odd)
{
background-color:lightgray;	
}
.update
{
	height:500px;
	widht:500px;
	//border:2px solid;
	margin-top:100px 0px 0px 200px;
}
.logo
{
height:60px;
width:60px;
margin-left:550px;	
}
#rohit
{
	height:20px;
	width:60px;
	
}
#rocky
{
	height:400px;
	width:400px;
}
table
{
	height:300px;
	width:300px;
}
</style>
</head>
<body  bgcolor="skyblue"><div id="menu">
<ul>
	<li><a href="eprofile.php">Home </a></li>
 <li><a href="ask.php">Ask for leave</a></li>
 <li><a href="myleave.php"> My leaves</a></li>
 <li><a href="viewsalary.php"> My Salary</a></li>
 <li><a href="myholidays.php"> My Attendance</a></li>
 <li><a href="updateprofile.php"> Update profile</a></li>
 <li><a href="echange.php">Change password </a></li>
 <li><a href="elogout.php">Logout </a></li>
 
</ul></div>
<div class="update">
<?php
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
		<div class="logo">	<img src="../admin/upload/<?php echo $row['photo'];?>" height="80px" width="80px" style="margin-left:100px;"/></div>
		<form action="eedit.php" method="post">
		
		
	

	
		
		<table border=2px align="center" style="border-collapse:collapse;" width="auto" >
<input type="hidden" name="id" value="<?php echo $row['emid']; ?>"/>
<tr><td>
Name :</td>
<td><input style="height:35px;"  type="text" value="<?php echo $row['name'];?>" name="name"/></br></td></tr>
<tr><td>Father's Name :</td>
<td><input style="height:35px;"  type="text" value="<?php echo $row['fname'];?>" name="fname"/></br></td></tr>
<tr><td>Gender :</td>
<td><input type="radio" value="male" value="<?php echo $row['gender'];?>" <?php if($row['gender']=='male'){?> checked <?php } ?>  name="a"/>male
<input type="radio" value="female" value="<?php echo $row['gender'];?>" <?php if($row['gender']=='female'){?> checked <?php } ?>  name="a"/>Female
</td></tr>
<tr><td>D.O.B :</td><td>
<input type="date" style="width:170px;"  value="<?php echo $row['dob'];?>" name="dob"></td></tr>
<tr><td>Mobile :</td>
<td><input style="height:35px;"  type="text" value="<?php echo $row['mobile'];?>" name="mobile"/></td></tr>
<tr><td>Address :</td>
<td><textarea style="height:45px;" name="add"><?php echo $row['address'];?></textarea></td></tr>
</td></tr>

<?php
}
?>
<div id="rohit">
<input type="submit" value="update" style="align:center;margin-top:320px; margin-left:600px;height:40px;width:150px;font-size:20px;"/></div>
</form>
</center>
</table>
</div>
</body>
</html>




