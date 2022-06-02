<?php
session_start();
if($_SESSION['name']!=""){
	header("location:user.php");
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>New Password</title>
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
	
		function valid(){
			var pass = document.form.password.value;
			var cpass = document.form.cpassword.value;
			if(pass != cpass){
				alert("Passwords do not match.");
				return false;
			}
		}
	
	</script>
	
</head>

<body>

	<?php include("navbar.php")?>
  <div class="jumbotron text-center">
    <?php
    $email=$_GET['key'];
    $pass=$_GET['reset'];
    require_once("adomo/connection.php");
    $select=mysql_query("select * from signup where md5(email)='$email' and md5(password)='$pass'");
    if(mysql_num_rows($select)==1){
    ?>
  	<span class="top">New Password</span>
	<center>
  	<form method="post" name="form" onsubmit="return valid()" action = "reset_msg.php">
  	    <input type="hidden" name="email" value="<?php echo $email;?>" >
    	<div class="input-group">
      	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      	<input id="password" type="password" class="form-control" name="password" placeholder="New Password" Required>
    	</div>
    	<div class="input-group">
      	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      	<input id="cpassword" type="password" class="form-control" name="cpassword" placeholder="Confirm Password" Required>
    	</div>
	  <div>
	  	<button class="btn btn-default" type="submit" name="submit">Set Password</button>
	  </div>
    </form>
	</center>
	<?php
    }
    ?>
  </div>
  <?php include("footer.php")?>
  <script type="text/javascript" src="scroll.js"></script>
</body>
</html>