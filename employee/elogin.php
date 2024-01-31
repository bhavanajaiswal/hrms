<?php
/*session_start();
if($_SESSION['euser']=="")
{
	session_destroy();
	header("location:elogin.php");
}*/
?>
<html>
    <head>
        <title>
            
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
        <style>
        *{
            margin:0;
            padding:0;
            text-decoration: none;
            font-family:cursive;
            box-sizing:border-box; 
        }
        body{
            min-height: 100vh;
            background-image: linear-gradient(120deg,#3498db,#8e44db);
            //background-color:#e8f0fe;
			opacity: 0.9;
			box-shadow:2px 2px 50px  inset;
			
        }
        .login-form
        {
            width:360px;
            background:#f1f1f1;
			box-shadow:2px 2px 30px  red inset;
            height:580px;
            padding:80px 40px;
            border-radius: 10px;
            position: absolute;
            left:50%;
            top:50%;
            transform: translate(-50%,-50%);
        }
        .login-form h1
        {
            text-align: center;
            margin-bottom: 60px;
        }
        .txtb
        {
            border-bottom: 2px solid #adadad;
            position: relative;
            margin:30px 0;
        }
        .txtb input
        {
            font-size: 15px;
            color:#333;
            border:none;
            width:100%;
            outline:none;
            background:none;
            padding:0 5px;
            height:40px;
        }
        .txtb span::before
        {
            content: attr(data-placeholder);
            position:absolute;
            top:50%;
            left:5px;
            color:#adadad;
            transform: translateY(-50%);
            z-index: -1;
            transition: .5s;
        }
        .txtb span::after
        {
            content: '';
            position: absolute;
            width:0%;
            height:22px;
            background:linear-gradient(120deg,#3498db,#8e44ad);
            transition: .5s;
        }
        .focus+span::before
        {
            top:-5px;
        }
        .focus+span::after
        {
            width:100%;
        }
        .logbtn
        {
            display: block;
            width:100%;
            height:50px;
            border:none;
            background:linear-gradient(120deg,#3498db,#8e44ad,#3498db);
            background-size: 200%;
            color:#fff;
            outline:none;
            cursor: pointer;
            transition:.5s;
        }
        .logbtn:hover
        {
            background-position:right;
        }
        .bottom-text
        {
            margin-top:60px;
            text-align: center;
            font-size:15px;
        }
        </style>
    </head>
    <body>
		<div id="logo"><img src="../images/images.jpeg"/>
        <form action="elogcode.php" method="post" class="login-form">
                <h1>Employee Login</h1>
        <div class="txtb">
            <input type="email" name="email" placeholder="Email" style="font-size:22px;">
            
        </div>
        <div class="txtb">
            <input type="password" name="password" placeholder="Password" style="font-size:22px;"/>
            
        </div>
        <input type="submit" class="logbtn" value="Login" style="font-size:20px;">
        <div class="bottom-text">
            
        </div><div id="index"> <a href="../index.php" style="font-size:20px;">Admin Login </a></div>
		<div> <a href="forgot.php" style="float:right; font-size:20px;">Forgot Password</a></div>
		</form>
    <script type="text/javascript">
    $(".txtb input").on("focus",function(){
        $(this).addclass("focus");});
    $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeclass("focus");});f
    </script>
    </body>
</html>
