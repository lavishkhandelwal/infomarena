<?php
session_start();
if($_SESSION['name']=="")
{
	header("location:index.php");
	exit();
}
if(isset($_POST['topi']))
{
	header("location:new_topic.php");
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dashboard</title>
<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<link rel="shortcut icon" type="image/x-icon" href="1499515955.ico">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link href="simple-sidebar.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="user_navbar.css" />
	
	<style>
	
		.inner a:hover {
			color:black !important;
		}
		
		.top {
			margin:40px 8% 20px 8%;
		}
		
		.left {
			height:160px;
			width:190px;
		}
		
		.buttons {
			margin:40px 8% 20px 8%;
		}
		
		.flow a{
			 margin-right:5px;
			 padding :8px;
			 margin-top: 20px;
		}
		
		.flow a:hover {
			text-decoration:none;
			background-color:#0099CC;
			color:#3300FF;
		}
		
		.btn {
			border-radius:0;
		}
		
		.first {
			border-top:10px solid #ccfff2;
			margin-left:115px;
			border-left:5px solid #00cc99;
			border-bottom:.5px solid #e6fff9;
			padding-top:8px;
			width: 82%;
			height:10%;
		}
		
		.last {
			color:#00FF00;
		}
		
		.con {
			color:#3333CC;
		}
	
	
	</style>
	
</head>

<body>

	<?php include("user_navbar.php");?>	
	<div class="container-fluid top">
		<div class="row">
			<div class="col-sm-3">
				<img src="images/logo2.png" class="img-responsive left" />
			</div>	
			<div class="col-sm-6">
				<h1>Infomarena Forum</h1>
				<p>Welcome to Infomarena Forum. In this section you can ask your doubts from other developers across the globe as well as help others developers to gain knowledge.</p>
			</div>
			<div class="col-sm-3">
				<h2>Other Resources</h2>
				<ul>
					<!--<li><a href="#">Support Site & knowledge base</a></li>
					<li><a href="#">Local Community meetup Group</a></li>-->
					<li><a href="https://www.facebook.com/Infomarena-468805980127769/">Infomarena on facebook</a></li>
					<li><a href="#">Infomarena on twitter</a></li>
					<li><a href="https://www.youtube.com/channel/UCwecSWztuvCD0JqHwvbI0PQ">Infomarena on youtube</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="container-fluid buttons">
		<div class="row">
			<div class="col-sm-2">
				 <div class="dropdown">
					<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">All Categories
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li class="dropdown-header">All categories</li>
						<li><a href="Qcommunity.php"><span class="glyphicon glyphicon-stop" style="color:red;"></span>&nbsp;Community</a></li>
						<li><a href="Qangular js.php"><span class="glyphicon glyphicon-stop" style="color:blue;"></span>&nbsp;Angular JS</a></li>
						<li><a href="Qhtml & css.php"><span class="glyphicon glyphicon-stop" style="color:khaki;"></span>&nbsp;HTML & CSS</a></li>
						<li><a href="Qjava.php"><span class="glyphicon glyphicon-stop" style="color:black;"></span>&nbsp;Java</a></li>
						<li><a href="Qjavascript.php"><span class="glyphicon glyphicon-stop" style="color:gray;"></span>&nbsp;JavaScript</a></li>
						<li><a href="Qphp.php"><span class="glyphicon glyphicon-stop" style="color:teal;"></span>&nbsp;PHP</a></li>
						<li><a href="Qpython.php"><span class="glyphicon glyphicon-stop" style="color:lavender;"></span>&nbsp;Python</a></li>
						<li><a href="Qrails.php"><span class="glyphicon glyphicon-stop" style="color:lime;"></span>&nbsp;Rails</a></li>
						<li><a href="Qsql.php"><span class="glyphicon glyphicon-stop" style="color:plum;"></span>&nbsp;SQL</a></li>
					</ul>
				</div>
  			</div>
			<div class="col-sm-6 flow">
			<!--
				<button type="button" class="btn btn-link"><a href="#">Latest</a></button>
				<button type="button" class="btn btn-link"><a href="bookmarks.php">Bookmarks</a></button>
				<button type="button" class="btn btn-link"><a href="#">New</a></button>
				<button type="button" class="btn btn-link"><a href="#">Unread</a></button>
				<button type="button" class="btn btn-link"><a href="#">Active</a></button>	
			-->
			</div>
			<div class="col-sm-3">
			<form name="frm" method="POST">
				<button type="submit" name="topi" class="btn btn-warning pull-right">
					&#43; &nbsp; New Topic
				</button>
			</form>
			</div>
		</div>
	</div>
	
<div class="container-fluid first">
		<a href="Qcommunity.php">
		<div class="col-sm-1"></div>
			<div class="col-sm-2">
				<strong>Community</strong><img src="images/community.png" class="img-responsive" />
			</div>
			<div class="col-sm-8">
				<p>Welcome to the Infomarena community! This forum category is for general discussion unrelated to any particular course.</p>
			</div>
		</a>
	</div>
	<div class="container-fluid first">
		<div class="col-sm-1"></div>
		<a href="Qangular js.php">
			<div class="col-sm-2">
				<strong>AngularJS</strong><img src="images/as.png" class="img-responsive" />
			</div>
			<div class="col-sm-8">
				<p>AngularJS is a JavaScript-based, open-source, front-end web application framework that is incredibly popular among developers.</p>
			</div>
		</a>
	</div>
	<div class="container-fluid first">
		<div class="col-sm-1"></div>
		<a href="Qhtml & css.php">
			<div class="col-sm-2">
				<strong>HTML & CSS</strong><img src="images/html.png" class="img-responsive" />
			</div>
			<div class="col-sm-8">
				<p>HTML and CSS are the languages that provide structure and style to webpages. </p>
			</div>
		</a>
	</div>
	<div class="container-fluid first">
		<div class="col-sm-1"></div>
		<a href="Qjava.php">
			<div class="col-sm-2">
				<strong>Java</strong><img src="images/java.png" class="img-responsive" />
			</div>
			<div class="col-sm-8">
				<p>Java has been one of the world's most popular programming languages for over twenty years, favored in particular by large businesses for its reliability, compatibility, and performance at scale. </p>
			</div>
		</a>
	</div>
	<div class="container-fluid first">
		<div class="col-sm-1"></div>
		<a href="Qjavascript.php">
			<div class="col-sm-2">
				<strong>JavaScript</strong><img src="images/js.png" class="img-responsive" />
			</div>
			<div class="col-sm-8">
				<p>JavaScript is an essential web technology, adding interactivity to the structure and style of HTML and CSS. </p>
			</div>
		</a>
	</div>
	<div class="container-fluid first">
		<div class="col-sm-1"></div>
		<a href="Qphp.php">
			<div class="col-sm-2">
				<strong>PHP</strong><img src="images/php.png" class="img-responsive" />
			</div>
			<div class="col-sm-8">
				<p>PHP is a server-side scripting language used primarily for web development, powering millions of sites like Facebook, Slack, and WordPress. </p>
			</div>
		</a>
	</div>
	<div class="container-fluid first">
		<div class="col-sm-1"></div>
		<a href="Qpython.php">
			<div class="col-sm-2">
				<strong>Python</strong><img src="images/python.png" class="img-responsive" />
			</div>
			<div class="col-sm-8">
				<p>Python is a widely used, high-level, powerful programming language, with a wide range of uses from web development to data science. Sites like YouTube, Reddit, and Dropbox are powered by Python.</p>
			</div>
		</a>
	</div>
	<div class="container-fluid first">
		<div class="col-sm-1"></div>
		<a href="Qrails.php">
			<div class="col-sm-2">
				<strong>Rails</strong><img src="images/rail.png" class="img-responsive" />
			</div>
			<div class="col-sm-8">
				<p>Ruby on Rails is a web application framework working with the language Ruby, enabling developers to quickly and easily develop web applications. </p>
			</div>
		</a>
	</div>
	<div class="container-fluid first">
		<div class="col-sm-1"></div>
		<a href="Qsql.php">
			<div class="col-sm-2">
				<strong>SQL</strong><img src="images/sql.png" class="img-responsive" />
			</div>
			<div class="col-sm-8">
				<p>SQL (Structured Query Language) is the standard data-management language, enabling you to communicate with databases. </p>
			</div>
		</a>
	</div>
	<script src="jquery.js"></script>
	 
	 <script>
    	$("#menu-toggle").click(function(e) {
        	e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    	});
    </script>
</body>
</html>