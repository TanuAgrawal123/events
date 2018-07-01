<?php
session_start();
header('content-type:image/jpeg');
$text=$_SESSION['code']=mt_rand(1111,9999);

$font_size=25;
$width=200;
$height=50;
$image=imagecreate($width,$height);

$r=mt_rand(100,200);
$g=mt_rand(100,200);
$b=mt_rand(100,200);


imagecolorallocate($image,$r,$g,$b);
$font_color=imagecolorallocate($image,0,0,0);
imagettftext($image,$font_size,15,20,40,$font_color,'BASKVILL.ttf',$text);
imagejpeg($image);
?>