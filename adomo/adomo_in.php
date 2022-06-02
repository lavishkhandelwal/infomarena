<?php
require_once("connection.php");
session_start();
extract($_REQUEST);
$q=mysql_query("select * from login");
$a=mysql_fetch_array($q);
if(isset($_COOKIE['user']) && isset($_COOKIE['pass']))
{
	$m1=$_COOKIE['user'];
	$m2=$_COOKIE['pass'];
}
if(isset($submit))
{
	if($a['username']==$username && $a['password']==md5($password))
	{
		if($_SESSION['admin1']==$captcha)
		{
			if(isset($checkbox))
			{
				setcookie("user",$username,time()+3600);
				setcookie("pass",$password,time()+3600);
			}
			$_SESSION['admin']=$username;
			header("location:adomo_panel.php");
			exit();
		}
		else
		{
			$d="Invalid Captcha Text";
		}
	}	
	else
	{
		$d="Invalid Username or Password";
	}
}

if(!empty($_GET['todo']))
{
	session_unset();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Admin-Login</title>
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
	
		body,html {
			height:	100%;
		}
		
		body {
			background-image: url(../images/adminbg.jpg);
			background-size:	cover;
		}
		
		.jumbotron {
			margin: 120px 30% 10px 30%;
			background-color: rgba(255,255,255,0.3);
			border-radius:5px;
			border:1px solid rgb(50,100,200);
			padding: 20px 20px 20px 20px;
		}
	  

		.top {
			font-size: 3em;
			font-family: 'Kurale', serif;
		}

		.btn {
			margin-bottom:10px;
		}
		
		.input-group {
			margin-top: 5px;
			margin-bottom:8px;
		}

		
	</style>
</head>

<body>
	<div class="jumbotron text-center">
  		<span class="top">Login</span>
		<center>
  			<form method="post" name="form">
    			<div class="input-group">
      				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      				<input id="username" type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $m1?>">
    			</div>
    			<div class="input-group">
      				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      				<input id="password" type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $m2?>">
    			</div>
      			<div class="input-group">
          			<img src="captcha.php" alt="captcha" class="img-responsive">
      			</div>
      			<div class="input-group">
          			<span class="input-group-addon">Captcha</span>
          			<input id="msg" type="text" class="form-control" name="captcha" placeholder="Enter Captcha">
      			</div>
	  			<div>
	  				<button class="btn btn-default" name="submit">Login</button>
	  			</div>
				<div>
					<?php echo $d?>
				</div>
    		</form>
	</center>

  </div>
</body>
</html>
