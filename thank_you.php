<?php
session_start();
if($_SESSION['name']!="")
{
	header("location:user.php");
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Name</title>
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="contact.css" />
		<script type="text/javascript" src="feedbackvalidate.js"></script>
	</head>

	<style>

		body {
			background-image: url("images/bg.jpg");
			background-size: cover;
			background-position: top-center;
		}

		body,html {
			height: 100%;
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


		.body {
			margin: 0 10% 0 10%; 
			background-color: rgba(0,0,0,0.3);
			min-height: 600px;
			padding: 20px 25px 10px 25px;
		}


		

		
		
		.footer {
			padding: 30px 0 0px 0;
		}
		
		.footer:before {
			content: '';
			border-top: solid 3px rgba(255, 255, 255, 0.25);
			width: 20em;
			display: block;
			margin: 0 auto 3em auto;
		}
		
		p {
			color:#FFFFFF;
			font-size:30px;
		}
		
		.thank a {
			color:#FFFFFF !important;
		}
		
		.thank a:hover {
			text-decoration:none;
			font-size:20px;
		}
		
		.thank {
			margin:17% 20% 5% 20%;
			background:rgba(255,255,255,0.1);
			padding:30px 20px 30px 20px;
			border:2px solid purple;
		}
		
	</style>

<body>

	<?php include("navbar.php")?>
	<div class="thank">	
		<center>
			<p>Thank You For Giving Your Feedback.<br />
			It will be Helpful to us to our Services</p>
			<a href="index.php">Go to Home</a>
		</center>
	</div>
	<?php include("footer.php")?>
	
	<script type="text/javascript" src="scroll.js"></script>
</body>
</html>
