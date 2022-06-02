<?php
session_start();
if($_SESSION['name']=="")
{
	header("location:login");
	exit();
}
require_once("adomo/connection.php");
extract($_REQUEST);
$tab=$_GET['id'];
$qu = mysql_query("select * from questions where id = '".$tab."'");
$arr = mysql_fetch_array($qu);
$qu1 = mysql_query("select * from userimages where email = '".$arr[4]."'");
$arr1 = mysql_fetch_array($qu1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Answer</title>
<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="1499515955.ico">
	<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
	<style>
		
		.form-control {
			margin: 5px 5px 5px 5px;
			margin-bottom:15px;
		}
		
		.content {
			resize: none;
		}
		
		li {
			padding-left:15px;
		}
		
		.menu {
			margin-left:35px;
		}
		
		.submit {
			margin-left:20px;
			margin-top:10px;
		}

		.cancel {
			margin-left:10px;
			margin-top:10px;
		}

		.heading {
		font-family: 'Roboto Slab', serif;
		font-size: 2.2em;
		}

		.date {
		padding-left: 80px;
		}
		
	</style>
	<script type="text/javascript" src="ansvalid.js"></script>
</head>

<body>

	<?php include("user_navbar.php");?>
	<div class="container-fluid buttons">
		<div class="row content">
			<div class="col-sm-6 heading"><?php echo $arr[1]; ?></div>
			<div class="col-sm-4"></div>
		</div>
		<div style='border-style: solid; border-width: 1px; margin-bottom: 10px;'></div>
		<div class="row">
			<div class="col-sm-1" style="padding-left: 50px;"><img src="<?php echo $arr1['path'];?>" class="img-circle" height="50" width="50"></div>
			<div class="col-sm-2"><strong><?php echo $arr[3]; ?></strong></div>
			<div class="col-sm-7"></div>
			<div class="col-sm-2 date"><?php echo $arr[5]; ?></div>
			<div class="col-sm-7" style="padding-top: 5px;"><?php echo $arr[2]; ?></div>
		</div>
		<div style='border-style: dashed; border-width: 1px; width: 90%; margin-left: 5%;'></div>
		<div class="row">
			<h2 align="center">Answer</h2>
		</div>
	<form method="post" name="frm" onsubmit="return valid()">
	<div class="row">
	<textarea name="editor2" class="content"></textarea>
        <script>
            CKEDITOR.replace( 'editor2' );
        </script>
	</div>
	<div class="row from-control">
		<button type="submit" class="btn btn-success submit" name="submit">Submit</button>
		<button type="submit" class="btn btn-danger cancel" name="reset">Cancel</button>
	</form>
	</div>
	</div>
</body>
</html>
<?php
$q=mysql_query("select * from signup where email='".$_SESSION['name']."'");
$a=mysql_fetch_array($q);
$username=$a['fname']." ".$a['lname'];
$date=date("d-m-Y");
$email=$a['email'];	
if(isset($submit))
{
	mysql_query("insert into answers set id='".$tab."', title='".$arr[1]."',answer='".$editor2."',username='".$username."',email='".$email."',date='".$date."', tag='".$arr[6]."'");	
	header("location:Qrails.php");
	exit();
}
if (isset($reset)) {
	header("location:Qrails.php");
	exit();
}
?>