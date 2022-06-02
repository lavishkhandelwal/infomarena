<?php
session_start();
if($_SESSION['name']!="")
{
	header("location:user.php");
	exit();
}
require_once("adomo/connection.php");
extract($_REQUEST);
$q=mysql_query("select * from signup where email='".$email."'");
$c=mysql_num_rows($q);
$e="";
$er="";
$name="default-profile-picture.jpg";
$type="image/jpeg";
$path="user_images/".$name;
if(isset($submit))
{
	if($_SESSION['lk']==$captcha)
	{
		if($c>0)
		{
			$e="Email already registered";
		}
		else
		{
			mysql_query("insert into signup set email='".$email."',password='".md5($password)."',mobile='".$phone."',fname='".$fname."',lname='".$lname."'");
			mysql_query("insert into userimages set email='".$email."',type='".$type."',path='".$path."',name='".$name."'");
			$_SESSION['name']=$email;
			header("location:user.php");
			exit();
		}
	}
	else if($captcha=="")
	{
		
	}
	else
	{
		$er="Invalid Captcha text";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Infomarena - Sign Up</title>
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
	margin-top: 5px;
	margin-bottom: 8px;
	color: #FF0000;
	font-weight: bold;
}
    </style>
	
	<script type="text/javascript" src="validation.js"></script>
</head>

<body>

	<?php include("navbar.php")?>
  <div class="jumbotron text-center">
  	<span class="top">Sign Up</span>
	<center>
  	<form method="post" name="form" onsubmit="return valid()">
		<div class="input-group">
      	<span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
      	<input id="fname" type="text" class="form-control" name="fname" placeholder="First Name">
    	</div>
		<div class="input-group">
      	<span class="input-group-addon"><i class="glyphicon glyphicon-bold"></i></span>
      	<input id="lname" type="text" class="form-control" name="lname" placeholder="Last Name">
    	</div>
    	<div class="input-group">
      	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      	<input id="email" type="text" class="form-control" name="email" placeholder="Email">
    	</div>
		<div class="style1">
   		  	<?php echo $e?>
		 </div>
    	<div class="input-group">
      	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      	<input id="password" type="password" class="form-control" name="password" placeholder="Password">
    	</div>
		<div class="input-group">
      	<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
      	<input id="phone" type="text" class="form-control" name="phone" placeholder="Mobile" maxlength ="10">
    	</div>
      <div class="input-group">
          <img src="captcha.php" alt="captcha" class="img-responsive">
      </div>
	  <div class="style1">
   		  	<?php echo $er?>
		</div>
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
          <input id="msg" type="text" class="form-control" name="captcha" placeholder="Enter Captcha">
      </div>
	  <div>
	  	<button class="btn btn-default" type="submit" name="submit">Sign Up</button>
	  </div>
	  <div class="last">
	  	Already Signed up<a href="login.php"> Login</a>
	  </div>
    </form>
	</center>

  </div>
  
  <?php include("footer.php")?>
  <script type="text/javascript" src="scroll.js"></script>
</body>
</html>
