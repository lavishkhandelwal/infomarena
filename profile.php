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
		<title>Profile</title>
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="shortcut icon" type="image/x-icon" href="1499515955.ico">
		<link rel="stylesheet" type="text/css" href="user_navbar.css" />
		<style>
			
			.top {
				padding:30px 5px 20px 30px;
				margin:0 10% 0 10%;
			}
	
			.img-responsive {
				margin-right:10px;
			}
	
			hr{
				display:block;
				margin:0 5% 0.5em 5%;
				border-style:solid;
				border-width:2px;
				color:rgba(0,0,0,0.5);
			}
	
			.jumbotron {
				margin:20px 20% 10px 20%;
			}
	
			.input-group {
				margin-bottom:50px;
			}
	
			label {
				color:#FF0000;
			}
			
			.mobile {
			text-align:center;
			}
			
			.btn-bs-file{
		    position:relative;
			margin-top: 5px;
			padding: 6px;
			}
			
			.btn-bs-file input[type="file"]{
			position: absolute;
			top: -9999999;
			filter: alpha(opacity=0);
			opacity: 0;
			width:0;
			height:0;
			outline: none;
			cursor: inherit;
			}
			
			.ques {
		
		background-color: rgba(0,0,0,0.1);
		margin: 20px 8% 40px 8%;
		min-height: auto;
		}
		
		.content {
		padding: 7px;
		}

		</style>
		
	</head>
	
	<body>
	
		<?php include("user_navbar.php");?>
	
		<div class="top">
			<img src="<?php echo $a2['path']; ?>" class="img-circle" height="60" width="60" style="display:inline;"/>&nbsp;
			<span><b><?php echo $username; ?></b></span>
		</div>
		
		<hr/>
		
		<div class="ques container-fluid">
			<div class="row content">
				<div class="col-sm-1"></div>
				<div class="col-sm-3">Number of Question Asked</div>
				<div class="col-sm-6"></div>
				<div class="col-sm-1">
					<?php
					$question = mysql_query("select * from questions where email='".$_SESSION['name']."'");
					$a1 = mysql_num_rows($question);
					echo $a1;
					?>
				</div>
			</div>
			<div class="row content">
				<div class="col-sm-1"></div>
				<div class="col-sm-3">Number of Question Answered</div>
				<div class="col-sm-6"></div>
				<div class="col-sm-1">
					<?php
					$answer = mysql_query("select * from answers where email='".$_SESSION['name']."'");
					$a2 = mysql_num_rows($answer);
					echo $a2;
					?>
				</div>
			</div>
		</div>
		
	</body>
</html>
