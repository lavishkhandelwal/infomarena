<?php
session_start();
require_once("adomo/connection.php");
extract($_REQUEST);
$q=mysql_query("select * from signup where email='".$_SESSION['name']."'");
$a=mysql_fetch_array($q);
$username=$a['fname']." ".$a['lname'];
$q2=mysql_query("select * from userimages where email='".$_SESSION['name']."'");
$a2=mysql_fetch_array($q2);
$_SESSION['image']=$a2['path'];
?>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
	  		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="user.php"><img src="images/Logo1.png" height="40" width="60" alt="logo" class="logo"></a></li>
			</ul>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $a2['path']; ?>" class="img-circle" height="40" width="40"/></a>
						<ul class="dropdown-menu">
							<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $username;?></a></li>
							<!--
							<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Messages</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-bell"></span>&nbsp;Notifications</a></a></li>
							-->
							<li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;Setting</a></li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
						</ul>
        		</li>
			</ul>
		</div>
	</div>
</nav>