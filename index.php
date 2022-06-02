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
		<title>Infomarena</title>
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
		}

		.buttons {
			display: inline;
		}

		.body {
			margin: 0 10% 0 10%; 
			background-color: rgba(0,0,0,0.3);
			min-height: 600px;
			padding: 20px 25px 10px 25px;
		}

		.topic {
			color: white;
			font-size: 1.2em;
		}

		.or {
			padding: 20px 0 20px 0;
			font-size: 1.2em;
		}
		
		.or a:hover {
			text-decoration:none;
		}

		.carousel-control.right, .carousel-control.left {
    		background-image: none;
    		color: purple;
		}

		.carousel-indicators li {
		    border-color: purple;
		}

		.carousel-indicators li.active {
		    background-color: purple;
		}

		.item h4 {
		    font-size: 19px;
		    line-height: 1.375em;
		    font-weight: 400;
		    font-style: italic;
		    margin: 70px 0;
		}

		.item span {
		    font-style: normal;
		}

		.bg-grey {
			padding: 10px 35px 25px 35px;
		}

		.contact {
			margin-bottom: 20px;
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
		
		.reviews:before {
			content: '';
			border-top: solid 3px rgba(255, 255, 255, 0.25);
			display: block;
			margin: 0 auto 3em auto;
		}
		
		textarea {
			resize: none;
		}
		
	</style>

<body>
	<?php include("navbar.php"); ?>
	<div class="jumbotron text-center">
		<div class="brand">
			Infomarena
		</div>
		
		<div class="content">
			Join the community of million of developers across World to acquire knowledge, share knowledge and build a better future.
		</div>
	</div>

	<div class="body">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
	    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    	<li data-target="#myCarousel" data-slide-to="1"></li>
	    	<li data-target="#myCarousel" data-slide-to="2"></li>
	  	</ol>

	  	<div class="carousel-inner">
	    	<div class="item active">
	    	  	<img src="images/c4.jpg" alt="Image 3">
	    	</div>

	    	<div class="item">
	      		<img src="images/c2.jpg" alt="Image 2">
	    	</div>

	    	<div class="item">
	      		<img src="images/c3.jpg" alt="Image 3">
	    	</div>
	  	</div>
	</div>
	</div>
	
	<div class="reviews text-center">
		<h2>What our user's say</h2>
		<div id="1myCarousel" class="carousel slide text-center" data-ride="carousel">
  			<!-- Indicators -->
  			<ol class="carousel-indicators">
    			<li data-target="#1myCarousel" data-slide-to="0" class="active"></li>
    			<li data-target="#1myCarousel" data-slide-to="1"></li>
    			<li data-target="#1myCarousel" data-slide-to="2"></li>
  			</ol>

  			<!-- Wrapper for slides -->
  			<div class="carousel-inner" role="listbox">
    			<div class="item active">
    				<h4>"This  is the best. I am so happy!"<br><span style="font-style:normal;">Anmol Seth</span></h4>
    			</div>
	    		<div class="item">
			      <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe</span></h4>
			    </div>
			    <div class="item">
			      <h4>"Could I... BE any more happy with this website"<br><span style="font-style:normal;">Tony Stark</span></h4>
			    </div>
  			</div>

		  	<!-- Left and right controls -->
		  	<a class="left carousel-control" href="1#myCarousel" role="button" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
			<a class="right carousel-control" href="#1myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			</a>
		</div>
    </div>
		
		<?php include("feedback.php");?>
		<?php include("footer.php");?>
	
	<script type="text/javascript" src="scroll.js"></script>
</body>
</html>