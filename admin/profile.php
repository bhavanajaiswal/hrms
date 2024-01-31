<?php
session_start();
//echo "welcome user sir";
//echo "<br/>";
//echo $_SESSION['user'];
if($_SESSION['user']=="")
{
 session_destroy();
header("Location:../index.php"); 

}
?>
<html>
<head>
  <link rel="stylesheet" href="../css/profile.css" style="text/css">
</head>

<body action="logout.php" method="post">
  <div id="profile">
  
	<div id="admin">
		<div class="adminlogo"> <img src="../images/icon/Usericon.jpg"></div>
		
		<div class="welcome">	<h3> <span style="color:white;font-family:century gothic; ">Welcome To Admin </span></h3></div>
					<div class="date">
				<h3 align="center" style="color:#fff;"><?php echo date('d/m/y');?>	</h3>
					</div>
					<div class="log"><a href="logout.php" style="text-decoration:none;">
										<h2> <span style="color:white;font-family:cursive;">Logout </span></h2></a>
					</div>			
				<div class="change">
						<a href="adminchange.php" style="text-decoration:none;">
										<h2> <span style="color:white;font-family:cursive; ">Change </span></h2></a>
				</div>		
	</div>
	<div id="outer">
			<div id="menu"><h1 style=" font-size:50px;color:white;text-align:center;">Your welcome in admin panel of marc
			<div class="administrator"> <img ="#"/></div> </h1><div id="admin1" style="float:right;color:red;">  </div>
			</div>
		<div id="rohit">
				<div class="row">
					<div class="collom" style="background-color:#00C851; color:black;"><a href="dpt.php" style="color:white;"><h1 style="margin-top:70px">Add</h1> <h3> Department </h3></a></div>
			<div class="collom" style=" background-color:#76ff03;color:black;"><a href="empy.php" style="color:white;"><h1 style="margin-top:70px">Add</h1><h3>Employee</h3></a> </div>
			<div class="collom" style="background-color:#aa66cc; color:black;"><a href="viewemp.php" style="color:white;"><h1 style="margin-top:70px">View </h1><h3>Employee</h3> </a></div>
			<div class="collom" style="background-color:#03a9f4;color:black;"><a href="addsalary.php" style="color:white;"> <h1 style="margin-top:100px">Salary</h1></a></div>
			
				</div>	
		<div class="row">
				<div class="collom" style="background-color:#b2ff59;color:black;"><a href="attendance.php" style="color:white;" > <h1 style="margin-top:100px">Attendance</h1></a></div>
			<div class="collom" style="background-color:#ff80ab;color:black;"><a href="viewsalary.php" style="color:white; "> <h1 style="margin-top:100px">Veiw Salary</h1></a></div>
			<div class="collom" style="background-color:#7b1fa2;color:black;"><a href="leaves.php" style="color:white;"> <h1 style="margin-top:100px">Leaves</h1></a></div>
			<div class="collom" style="background-color:#651fff;color:black;"><a href="addnoti.php" style="color:white;"> <h1 style="margin-top:100px">Notification</h1></a></div>
			</div>
		
			</div>
</div>
</div>

</body>
</html>