<?php
session_start();
require_once("adomo/connection.php");
extract($_REQUEST);
$q=mysql_query("select * from signup where email='".$_SESSION['name']."'");
$a=mysql_fetch_array($q);
$username=$a['fname']." ".$a['lname'];
$date=date("d-m-Y");
$email=$a['email'];
if(isset($_POST['submit']))
{
	mysql_query("insert into questions set title='".$text."',content='".$editor2."',username='".$username."', date='".$date."',email='".$email."', tag='".$categories."'");
	if($categories=="Community")
	{
		header("location:Qcommunity.php");
		exit();
	}
	else if($categories=="Angular JS")
	{
		header("location:Qangular js.php");
		exit();
	}
	else if($categories=="HTML & CSS")
	{
		header("location:Qhtml & css.php");
		exit();
	}
	else if($categories=="Java")
	{
		header("location:Qjava.php");
		exit();
	}
	else if($categories=="JavaScript")
	{
		header("location:Qjavascript.php");
		exit();
	}
	else if($categories=="PHP")
	{
		header("location:Qphp.php");
		exit();
	}
	else if($categories=="Python")
	{
		header("location:Qpython.php");
		exit();
	}
	else if($categories=="Rails")
	{
		header("location:Qrails.php");
		exit();
	}
	else if($categories=="SQL")
	{
		header("location:Qsql.php");
		exit();
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>New Topic</title>
<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="user_navbar.css" />
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
		
	</style>
	<script type="text/javascript">
		function valid(){
			if(document.frm.text.value==""){
			alert("Please Enter the Title");
			document.frm.text.focus();
			return false;
			}
			if(document.frm.categories.selectedIndex==0){
			alert("Please Select the Category");
			document.frm.categories.focus();
			return false;
			}
			if(document.frm.editor2.value==""){
			alert("Please Enter the Question");
			document.frm.editor2.focus();
			return false;
			}
		}
	</script>
	
</head>

<body>

	<?php include("user_navbar.php");?>
	<div class="container-fluid buttons">
		<div class="row">
			<h2 align="center">Create a new topic</h2>
		</div>
		<div class="row">
			<div class="col-sm-2">
	<form name="frm" method="Post" onsubmit="return valid()">
      	<input id="word" type="text" class="form-control" name="text" placeholder="Type title of the topic">
		</div>
		<div class="col-sm-2">
			<select type="button" name="categories" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span>
			<ul class="dropdown-menu menu">
				<li><option selected>Select the Categories</option></li>
				<li><option value="Community">Community</option></li>
				<li><option value="Angular JS">Angular JS</option></li>
				<li><option value="Java">Java</option></li>
				<li><option value="HTML & CSS">HTML and CSS</option></li>
				<li><option value="JavaScript">JavaScript</option></li>
				<li><option value="PHP">PHP</option></li>
				<li><option value="Python">Python</option></li>
				<li><option value="Rails">Rails</option></li>
				<li><option value="SQL">SQL</option></li>
			</ul>
			</select>
			</div>	
	</div>
	<div class="row">
	<textarea name="editor2" class="content"></textarea>
        <script>
            CKEDITOR.replace( 'editor2' );
        </script>
	</div>
	<div class="row from-control">
		<button type="submit" class="btn btn-success submit" name="submit">Submit</button>
		<button type="reset" class="btn btn-danger cancel" name="reset">Cancel</button>
	</form>
	</div>
	</div>
</body>
</html>