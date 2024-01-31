<?php


?>
<html>
<head>


<link rel="stylesheet" href="css/css.css" style="text/css"/>



</head>
<body >

<div id="menu"><img src="images/logo.jpg"/> </div>
<div id="outer">
	<div class="container">
		<img src="images/hrmsmarc.jpg"/>
	</div>

	<div class="left">
		
		
		<form  class="box" action="admin/logcode.php" method="post">
			<h1> Login</h1>
			<input type="email" name="email" placeholder="Email" value=""/>
			<input type="password" name="password" placeholder="password" value=""/>
			<input type="submit" name="" value="Signin"/>
			<h5> <a href="employee/elogin.php"><span style="color:red; font-family:century gothic; float:left; margin-right:10px;">Employee login</span> </a></h5>
			 <h5> <a href="admin/forgot.php"><span style="color:red; font-family:century gothic; float:right; margin-right:10px;">Forgot password</span> </a></h5>
			 
			
		</form>
	</div>
</div>
<!--Lfooter start-->
<div class="row" style="min-height:67px;background-color:black; opacity:0.7;color:white; ">

<div class="col-sm-4" style="float:left;">
<h4> &nbsp &nbspCopyright &copy; Softpro India</h4>
</div>
<div class="col-sm-4" style="float:left;">

</div>
<div class="col-sm-4" style="float:right;">
<h4>Designd & Developed By:ROHIT MAURYA</h4>
</div>
</div>
<!--Lfooter End-->


</body>
</html>