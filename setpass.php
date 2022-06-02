<?php
session_start();
if($_SESSION['name']=="")
{
	header("location:login.php");
	exit();
}
require_once("adomo/connection.php");
extract($_REQUEST);
$q=mysql_query("select * from signup where email='".$_SESSION['name']."'");
$a=mysql_fetch_array($q);
if(isset($submit))
{
	if(md5($opassword)==$a['password'])
	{
		if($password==$cpassword)
		{
			mysql_query("update signup set password='".md5($password)."' where email='".$_SESSION['name']."'");
			header("location:user.php");
			exit();
		}
		else
		{
		$e="Password Do Not Match";
		}
	}
	else 
	{
		$f="Password Do Not Match";
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Change Password</title>
<link rel="shortcut icon" type="image/x-icon" href="1499515955.ico">
<link rel="stylesheet" type="text/css" href="user_navbar.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	
	<style>
	
	 .jumbotron {
		background: transparent;
		margin: 120px 30% 10px 30%;
		background-color: rgba(255,255,255,0.07);
		padding: 40px 40px 60px 40px;
		border: 1px solid black;
      }
	  
	  .input-group {
			margin-top: 10px;
			margin-bottom:15px;
		}
		
		.top {
			font-size: 3em;
			font-family: 'Kurale', serif;
		}
		
		.style1 {
			color: #FF0000;
			font-weight: bold;
		}
	  
	  </style>
</head>

<body>

<?php include("user_navbar.php");?>

<div class="jumbotron text-center">
  	<span class="top">Change Password</span>
	<center>
  	<form method="post" name="form" onsubmit="return valid()">
		 <div class="input-group">
      	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      	<input id="password" type="password" class="form-control" name="opassword" placeholder="Enter Old Password">
		</div>
		<div class="style1"><?php echo $f; ?></div>
    	<div class="input-group">
      	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      	<input id="password" type="password" class="form-control" name="password" placeholder="Enter New Password">
    	</div>
		<div class="input-group">
      	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      	<input id="password" type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
		</div>
		<div class="style1"><?php echo $e; ?></div>
    	
	  <div>
	  	<button class="btn btn-default" type="submit" name="submit">Submit</button>
	  </div>
    </form>
	</center>

  </div>

</body>
</html>
