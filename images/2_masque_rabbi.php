<?php
	header("Content-type: image/jpeg");
	// chargement de l'image
	$image = imagecreatefromjpeg("rabbi3.jpg");
	
	// on récupère la largeur et la hauteur de l'image que l'on vient de charger 
	$largeur = imagesx($image);
	$hauteur = imagesy($image);
	
	$centre_l = $largeur / 2;
	$centre_h = $hauteur / 2;
	$diametre = round(min($largeur,$hauteur) * .9);
	
	$rose = imagecolorallocate($image, 255, 50, 204);
	$noir = imagecolorallocate($image, 0, 0, 0);
	
	imagearc($image, $centre_l, $centre_h, $diametre, $diametre, 0, 360, $noir);
	
	//imagefilltoborder($image, 300, 200, $noir, $rose);
	imagefilltoborder($image, 1, 1, $noir, $noir);
	
	
	// creation de l'image au vol
	imagejpeg($image);
?>

