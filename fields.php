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
	<title>Fields</title>
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
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
		margin: 120px 8% 10px 8%;
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
		
		.panel:hover {
    		box-shadow: 5px 0px 40px rgba(0,0,0, .5);
			background-color:rgba(255,255,255,0.3);
		}
		
		.panel {
			border: 1px solid purple;
			border-radius: 0;
			transition: box-shadow 0.5s;
		}
		
		.option a:hover {
			text-decoration:none;
		}
		  

    </style>
</head>

<body>

	<?php include("navbar.php");?>
  <div class="jumbotron text-center">
  	<div class="row">
		<div class="col-sm-4 option">
			<a href="Gcommunity.php">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						Community	
					</div>
					<div class="panel-body">
						This forum category is for general discussion unrelated to any particular course.
					</div>
				</div>
			</a>
		</div>
		<div class="col-sm-4 option">
			<a href="Gangular js.php">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						AngularJS	
					</div>
					<div class="panel-body">
						AngularJS is a JavaScript-based, open-source, front-end web application framework that is incredibly popular among developers.
					</div>
				</div>
			</a>
		</div>
		<div class="col-sm-4 option">
			<a href="Ghtml & css.php">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						HTML & CSS	
					</div>
					<div class="panel-body">
						HTML and CSS are the languages that provide structure and style to webpages.
					</div>
				</div>
			</a>
		</div>
	</div>	
	<div class="row">	
		<div class="col-sm-4 option">
			<a href="Gjava.php">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						Java	
					</div>
					<div class="panel-body">
						Java has been one of the world's most popular programming languages for over twenty years, favored in particular by large businesses for its reliability, compatibility, and performance at scale.
					</div>
				</div>
			</a>
		</div>
		<div class="col-sm-4 option">
			<a href="Gjavascript.php">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						Javascript	
					</div>
					<div class="panel-body">
						JavaScript is an essential web technology, adding interactivity to the structure and style of HTML and CSS.
					</div>
				</div>
			</a>
		</div>
		<div class="col-sm-4 option">
			<a href="Gphp.php">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						PHP
					</div>
					<div class="panel-body">
						PHP is a server-side scripting language used primarily for web development, powering millions of sites like Facebook, Slack, and WordPress.
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 option">
			<a href="Gpython.php">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						Python
					</div>
					<div class="panel-body">
						Python is a widely used, high-level, powerful programming language, with a wide range of uses from web development to data science. Sites like YouTube, Reddit, and Dropbox are powered by Python.
					</div>
				</div>
			</a>
		</div>
		<div class="col-sm-4 option">
			<a href="Grails.php">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						Rails	
					</div>
					<div class="panel-body">
						Ruby on Rails is a web application framework working with the language Ruby, enabling developers to quickly and easily develop web applications.
					</div>
				</div>
			</a>
		</div>
		<div class="col-sm-4 option">
			<a href="Gsql.php">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						SQL	
					</div>
					<div class="panel-body">
						SQL (Structured Query Language) is the standard data-management language, enabling you to communicate with databases.
					</div>
				</div>
			</a>
		</div>
	</div>
  </div>
  <?php include("footer.php")?>
  <script type="text/javascript" src="scroll.js"></script>
</body>
</html>
