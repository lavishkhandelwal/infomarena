<?php
session_start();
if($_SESSION['admin']=="")
{
	header("location:adomo_in.php");
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Admin Panel</title>
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="adomo.css" />
	
</head>

<body>
	<div class="jumbotron text-center">
		<?php include("head.php")?>
		<div class="row content">
			<?php include("left.php")?>
			<div class="col-sm-10">
				<?php include("feedback.php")?>
			</div>
		</div>
		<?php include("footer.php")?>
	</div>
</body>
</html>
