<?php
session_start();
if($_SESSION['name']!="")
{
	header("location:user.php");
	exit();
}
require_once("adomo/connection.php");
extract($_REQUEST);
$q=mysql_query("select * from signup where email='".$email."' and password='".md5($password)."'");
$c=mysql_num_rows($q);
$e="";
$er="";
if(isset($_COOKIE['email']) && isset($_COOKIE['password']))
{
$em=$_COOKIE['email'];
$psw=$_COOKIE['password'];
}
if(isset($submit))
{
	if($c>0)
	{
		if($captcha==$_SESSION['lk'])
		{
			if(isset($checkbox))
			{
			setcookie("email",$email,time()+1*24*60*60);
			setcookie("password",$password,time()+1*24*60*60);
			}
			$_SESSION['name']=$email;
			$id=session_id();
			mysql_query("insert into online_user set name='".$email."',session_id='".$id."'");
			//header("location:user_panel.php");
			header("location:user.php");
			exit();
		}
		else
		{
			$er="Invalid Captcha Text";
		}
	}
	else
	{
		$e="Invalid Username or Password";
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Infomarena - Login</title>
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="contact.css" />
	<link rel="shortcut icon" type="image/x-icon" href="1499515955.ico">

    <style>

      body,html {
        height: 100%;
        margin: 0;
        padding: 0;
      }
	  
	  body {
	  	background-image: url("images/bg.jpg");
		background-position: top-center;
		background-size: cover;
	  }
      
      .jumbotron {
		background: transparent;
		margin: 120px 30% 10px 30%;
		background-color: rgba(255,255,255,0.07);
		padding: 20px 20px 20px 20px;
		border: 1px solid purple;
      }
	  
	  .navbar {
			border: 0;
			border-radius: 0;
			padding: 8px 8px 5px 8px;
			background: transparent;
			z-index: 1999;
		}


		.navbar-right ul li {
			margin-left: 5px;
		}

		.navbar ul li a:hover {
			font-size: 25px;
		}
		
		.top {
			font-size: 3em;
			font-family: 'Kurale', serif;
		}
		
		.input-group {
			margin-top: 5px;
			margin-bottom:8px;
		}
		
		.footer {
			padding: 30px 0 30px 0;
		}
		
		.footer:before {
			content: '';
			border-top: solid 3px rgba(255, 255, 255, 0.25);
			width: 20em;
			display: block;
			margin: 0 auto 3em auto;
		}
		
		.btn {
			margin-bottom:10px;
		}
		
		.last {
			color:white;
		}
		
		.last a:hover {
			text-decoration:none;
		}
		
		.top {
			color:white;
		}	
		
	
    	.style1 {
			color: #FF0000;
			font-weight: bold;
		}
		
		.checkbox {
		color:white;
		}
		
    </style>
	
	<script>
	
		function valid()
		{
			var x=document.form.email.value;
			var atpos=x.indexOf("@");
			var dotpos=x.indexOf(".");
			if(x=="")
			{
				alert("Please Enter Email Address");
				document.form.email.focus();
				return false;
			}
			else
			{
				if(atpos<1|| dotpos<atpos+2 || dotpos+2>x.length)
				{
					alert("Enter Valid Email Address");
					document.form.email.focus();
					return false;
				}
			}
			if(document.form.password.value=="")
			{
				alert("Please Enter Password");
				document.form.password.focus();
				return false;
			}
			
			if(document.form.captcha.value=="")
			{
				alert("Please Fill Captcha");
				document.form.captcha.focus();
				return false;
			}	

		}
	
	</script>
	
</head>

<body>

	<?php include("navbar.php")?>
  <div class="jumbotron text-center">
  	<span class="top">Login</span>
	<center>
  	<form method="post" name="form" onsubmit="return valid()">
		<div class="style1">
		  <?php echo $e?>
		 </div>
    	<div class="input-group">
      	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      	<input id="email" type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $em; ?>" Required>
    	</div>
    	<div class="input-group">
      	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      	<input id="password" type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $psw; ?>" Required>
    	</div>
      <div class="input-group">
          <img src="captcha.php" alt="captcha" class="img-responsive">
      </div>
	  <div class="style1">
	  	<?php echo $er?>
	  </div>
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
          <input id="msg" type="text" class="form-control" name="captcha" placeholder="Enter Captcha" Required>
      </div>
	  <div class="input-group checkbox">
	  		<input type="checkbox" name="checkbox" />&nbsp;Remember Me
	  </div>
	  <div>
	  	<button class="btn btn-default" type="submit" name="submit">Login</button>
	  </div>
	  <div class="last">
	  	New to Infomarena<a href="signup.php"> Join for free</a>
	  </div>
	  <div class="last">
	  	<a href="forgot.php">Forgot Password</a>
	  </div>
    </form>
	</center>

  </div>
  
 
  <?php include("footer.php")?>
  
  <script type="text/javascript" src="scroll.js"></script>
</body>
</html>
