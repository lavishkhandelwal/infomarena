<?php
session_start();
require_once("adomo/connection.php");
if($_SESSION['name']!="")
{
	mysql_query("delete from online_user where name='".$_SESSION['name']."'");
	session_unset($_SESSION['name']);
	header("location: login.php");
	exit();
}
else
{
	header("location:login.php");
	exit();
}
?>