<?php
header("Content-type: image/jpeg");
$img = imagecreate(250,80);

$noir = imagecolorallocate($img, 0, 0, 0);
$blanc = imagecolorallocate($img, 255, 255, 255);
$rouge   = imagecolorallocate($img, 255, 0, 0);
$vert = imagecolorallocate($img, 0, 255, 0);
$bleu  = imagecolorallocate($img, 0, 0, 255);

$tab_points = array(
0 => 190,
1 => 60,
2 => 210,
3 => 20,
4 => 230,
5 => 60,
);

imagerectangle($img, 10, 10, 240, 70, $blanc);
imagefilledrectangle($img, 20, 20, 60, 60, $rouge);
imagefilledellipse($img, 90, 40, 40, 40, $bleu);
imagefilledellipse($img, 150, 40, 70, 40, $vert);
imagefilledpolygon($img, $tab_points, 3, $blanc);

imagejpeg($img);
imagedestroy($img);
?>