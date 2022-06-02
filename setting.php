<?php
session_start();
if($_SESSION['name']=="")
{
	header("location:login.php");
	exit();
}
require_once("adomo/connection.php");
extract($_REQUEST);
$q=mysql_query("select * from signup where email='".$_SESSION['name']."'");
$a=mysql_fetch_array($q);
$username=$a['fname']." ".$a['lname'];
$phone=$a['mobile'];
$q2=mysql_query("select * from userimages where email='".$_SESSION['name']."'");
$a2=mysql_fetch_array($q2);
$name=$_FILES['file']['name'];
$type=$_FILES['file']['type'];
if(!is_dir("user_images"))
{
	mkdir("user_images");
}
if(isset($Submit))
{
	mysql_query("update signup set mobile='".$mobile."' where email='".$_SESSION['name']."'");
	if($type=="image/gif" || $type=="image/jpeg" || $type=="image/png")
	{
		$path="user_images/".$name;
		mysql_query("update userimages set name='".$name."',type='".$type."',path='".$path."' where email='".$_SESSION['name']."'");
		move_uploaded_file($_FILES['file']['tmp_name'],$path);
	}
	else if($name=="" && $type=="")
	{
		
	}
	else
	{
		echo "<script>alert('Upload Correct Image File')</script>";
	}
}
$q3=mysql_query("select * from signup where email='".$_SESSION['name']."'");
$a3=mysql_fetch_array($q3);
$phone=$a3['mobile'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Settings</title>
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

		</style>
		
	</head>
	
	<body>
	
		<?php include("user_navbar.php");?>
		<br>
		<!--
		<div class="top">
			<img src="<?php echo $a2['path']; ?>" class="img-circle" height="60" width="60" style="display:inline;"/>&nbsp;
			<span><b><?php echo $username; ?></b></span>
		</div>
		<hr/>
		-->
		
		<div class="jumbotron text-center">
			<center>
  				<form method="post" name="form" enctype="multipart/form-data" onsubmit="return valid()">
					<div class="input-group">
      					<span>Name</span>
			      		<div class="well"><?php echo $username; ?></div>
			    	</div>
        
					<div class="input-group">
			          <span>Email</span>
			          <div class="well"><?php echo $_SESSION['name']; ?></div>
      				</div>
					
					<span>Mobile</span>
					
					<div class="input-group">
						<input type="text" name="mobile"  class="mobile" value="<?php echo $phone;?>" maxlength="10"/>
      				</div>
					
	  	  			<div class="input-group">
					  	<span>Profile Picture</span><br>
					  	<img src="<?php echo $a2['path']; ?>" class="img-circle" height="80" width="100" name="image"/><br>
						<label class="btn-bs-file btn btn-xs btn-primary">Update Profile Picture
							<input type="file" name="file" class="file" />
						</label>
					</div>
					
					<div class="input-group">
	  					<a href="setpass.php">Change Password</a>
	  				</div>
	  
	  				<div>
	  					<button class="btn btn-success" type="submit" name="Submit">Save Changes</button>
					</div>
    
				</form>
			</center>
		</div>
		
	</body>
</html>
