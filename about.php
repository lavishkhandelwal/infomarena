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
		<title>About Us</title>
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="contact.css" />
		<link rel="shortcut icon" type="image/x-icon" href="1499515955.ico">
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
		.jumbotron {
			margin: 0 20% 0 20%;
			min-height: 300px;
			color: white;
			margin-top: 35px;
			background: transparent;
		}
		.brand {
			margin: 50px 0 25px 0;
			font-size: 3em;
			font-family: 'Kurale', serif;
		}
		.content {
			margin: 0 15% 0 15%;
			font-size: 1.2em;
			font-family: inherit;
		}
		.topic {
			display: inline;
			font-size: 1.5em;
			color: white;
		}
		.body {
			margin: 0 10% 0 10%; 
			background-color: rgba(0,0,0,0.3);
			min-height: 300px;
			padding: 20px 25px 10px 25px;
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
	</style>
<body>
	<?php include("navbar.php"); ?>
	<div class="jumbotron text-center">
		<div class="brand">
			About Infomarena
		</div>
	</div>
	<div class="body">
		<div class="topic">
			Founded in 2020, Infomarena is an online community for anyone that codes to learn, share their knowledge, and build their careers. Many unique visitors come to Infomarena each month to help solve coding problems, develop new skills, and find new opportunities. Million of developers across World can join the discussion to acquire new knowledge, share knowledge and build a better future.
		</div>
	</div>
	<?php include("footer.php");?>
	<script type="text/javascript" src="scroll.js"></script>
</body>
</html>