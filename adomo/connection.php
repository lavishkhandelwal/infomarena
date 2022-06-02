<?php
$host="localhost";
$user="id12732397_info";
$password="info123";
$dbname="id12732397_infomarena";
mysql_connect($host,$user,$password,$dbname) or die("Connection to the server not established");
mysql_select_db($dbname) or die("Database not found");
?>