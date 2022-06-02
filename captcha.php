<?php
session_start();
$n=rand(1111111,9999999);
//echo $n;
$x=100;
$y=40;
$f=14;
$_SESSION['lk']=$n;
header("content-type: image/jpeg");
$img=imagecreate($x,$y);
imagecolorallocate($img,0,0,0);
$wh=imagecolorallocate($img,255,255,255);
imagestring($img,$f,20,10,$n,$wh);
imagejpeg($img,null,25);
?>