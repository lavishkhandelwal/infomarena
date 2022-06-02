<?php
session_start();
if($_SESSION['name']!=""){
	header("location:user.php");
	exit();
}
require_once("adomo/connection.php");
extract($_REQUEST);
$select=mysql_query("select * from signup where email='".$email."'");
  $n = mysql_num_rows($select);
  $row=mysql_fetch_array($select);
  if(isset($submit)){
  if($n == 1){
      $email=$row['email'];
      $user=md5($row['email']);
      $pass=md5($row['password']);
      $link='infomarena1.000webhostapp.com/reset_password.php?key='.$user.'&reset='.$pass;
      $subject = "Password Reset Link";
      $headers = "From: infomarena1@gmail.com";
      mail($email,$subject,$link,$headers);
      header('location:send_link.php');
      exit();
  }else{
      $e = "Email not found";
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Reset Password</title>
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

		}
	
	</script>
	
</head>

<body>

	<?php include("navbar.php")?>
  <div class="jumbotron text-center">
  	<span class="top">Reset Password</span>
	<center>
  	<form method="post" name="form" onsubmit="return valid()">
		<div class="style1">
		  <?php echo $e?>
		 </div>
    	<div class="input-group">
      	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      	<input id="email" type="text" class="form-control" name="email" placeholder="Email">
    	</div>
      
	  <div>
	  	<button class="btn btn-default" type="submit" name="submit">Reset</button>
	  </div>
    </form>
	</center>

  </div>
  
 
  <?php include("footer.php")?>
  
  <script type="text/javascript" src="scroll.js"></script>
</body>
</html>
