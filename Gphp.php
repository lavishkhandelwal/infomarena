<?php
session_start();
require_once("adomo/connection.php");
extract($_REQUEST);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>PHP</title>
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">

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
	  	color: white;
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

		.con {
		margin-left: 10%;
		margin-top: 2%;
		margin-right: 10%;
		}

		hr { 
	    display: block;
	    margin-top: 0.5em;
	    margin-bottom: 0.5em;
	    margin-left: 0;
	    margin-right: auto;
	    border-style: inset;
	    border-width: 1px;
		}

				.top {
			border-left : 2px;
			margin:40px 8% 20px 8%;
		}
	
	.ques {
		background-color: rgba(0,0,0,0.1);
		margin: 20px 8% 40px 8%;
		min-height: auto;
	}

	.content {
		padding: 10px;
	}

	#box {
		border: solid black 4px;
		width: 60px; 
		height: 45px;
	}

	.box {
		padding: auto;
		font-size: 2em;
	}

	.heading {
		font-family: 'Roboto Slab', serif;
		font-size: 2.2em;
	}

	.date {
		padding-left: 90px;
	}
	  
    </style>
</head>

<body>

	<?php include("navbar.php");?>
  <div class="jumbotron text-center">
	<div class="container-fluid top">
		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-2">
				<img src="images/php.png" class="img-responsive" />
			</div>	
			<div class="col-sm-6">
				<h1>PHP</h1>
				<p>PHP is a server-side scripting language used primarily for web development, powering millions of sites like Facebook, Slack, and WordPress.</p>
			</div>
		</div>
	</div>  	
  </div>

	<?php
		$q1=mysql_query("select * from questions where tag = 'PHP'");
		$n=1;
		while($ar=mysql_fetch_array($q1))
		{
		$a=$ar[4];
		$q2=mysql_query("select * from userimages where email='".$a."'");
		$a1=mysql_fetch_array($q2);
		?>
	<div class="ques container-fluid">
		<div class="row content">
			<div class="col-sm-1 box" id="box"><?php echo $n; ?></div>
			<div class="col-sm-6 heading"><?php echo $ar[1]; ?></div>
			<div class="col-sm-4"></div>
			<!--
			<a href="bookmarks.php?id=<?php echo $ar[0]?>" style="text-decoration: none;">
			<div class="col-sm-1" style="text-align: right; padding-top: 15px;"><span class="glyphicon glyphicon-bookmark"></span></div>
			</a>
		-->
		</div>
		<div style='border-style: solid; border-width: 1px;'></div>
		<div class="row content">
			<div class="col-sm-1"><img src="<?php echo $a1['path'];?>" class="img-circle" height="50" width="50"></div>
			<div class="col-sm-2"><strong><?php echo $ar[3]; ?></strong></div>
			<div class="col-sm-7"></div>
			<div class="col-sm-2 date"><?php echo $ar[5]; ?></div>
			<div class="col-sm-7" style="padding-top: 5px;"><?php echo $ar[2]; ?></div>
		</div>
		<div style='border-style: dashed; border-width: 1px; width: 90%; margin-left: 5%;'></div>
		<br>
		<?php
		$heading=$ar[0];
		$q3=mysql_query("select * from answers where tag='PHP' and id='".$ar[0]."'");
		while($a3=mysql_fetch_array($q3))
		{
			$heading1=$a3[0];
			$email=$a3['email'];
			if($heading==$heading1)
			{
				$q4=mysql_query("select * from userimages where email='".$email."'");
				$a4=mysql_fetch_array($q4);
		?>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-1"><img src="<?php echo $a4['path']; ?>" class="img-circle" height="40" width="40"></div>
			<div class="col-sm-2"><strong><?php echo $a3['username']; ?></strong></div>
			<div class="col-sm-5"></div>
			<div class="col-sm-2 date"><?php echo $a3['date'];?></div>
			<div class="col-sm-7"><?php echo $a3['answer']; ?></div>
		</div>
		<div style='border-style: dotted; border-width: 1px; width: 85%; margin-left: 7.5%;'></div>
		<br>
		<?php
		}
		else{
			break;
		}
		}
		?>
		<div class="row content">
			<form name='frm' method='POST'>
			<button type='submit' name='topi' class='btn btn-info pull-right'>
				&nbsp;&nbsp;<a href="signup.php" style="text-decoration: none;">Answer</a>&nbsp;&nbsp;	
			</button>
			</form>
		</div>
	</div>
	<?php
	$n++;
	}
	?>
	<?php include("footer.php");?>
	<script type="text/javascript" src="scroll.js"></script>
</body>
</html>	