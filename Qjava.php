<?php
session_start();
if($_SESSION['name']=="")
{
	header("location:login.php");
	exit();
}
require_once("adomo/connection.php");
extract($_REQUEST);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Java</title>
<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="shortcut icon" type="image/x-icon" href="1499515955.ico">
	
	<link rel="stylesheet" type="text/css" href="user_navbar.css" />	
	<style>

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

	<?php include("user_navbar.php");?>	
	<div class="container-fluid top">
		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-2">
				<img src="images/html.png" class="img-responsive" />
			</div>	
			<div class="col-sm-6">
				<h1>Java</h1>
				<p>Java has been one of the world's most popular programming languages for over twenty years, favored in particular by large businesses for its reliability, compatibility, and performance at scale.</p>
			</div>
		</div>
	</div>
	<?php
		$q1=mysql_query("select * from questions where tag = 'Java'");
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
		$q3=mysql_query("select * from answers where tag='Java' and id='".$ar[0]."'");
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
				&nbsp;&nbsp;<a href="answer(java).php?id=<?php echo $ar[0]?>" style="text-decoration: none;">Answer</a>&nbsp;&nbsp;	
			</button>
			</form>
		</div>
	</div>
	<?php
	$n++;
	}
	?>
</body>
</html>	