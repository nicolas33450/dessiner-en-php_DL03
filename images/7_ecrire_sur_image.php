<?php
	header("Content-type: image/jpeg");
	// chargement de l'image
	$dest = imagecreatefromjpeg("bob.jpg");
	
	// couleur du texte
	$text_color = imagecolorallocate ($dest, 233, 14, 91);
	
	//imagettftext (image destination, taille, inclinaison, pos_x, pos_y, couleur, chemin police ttf, texte a écrire);
	imagettftext ($dest, 35, 20, 350, 650, $text_color, "./desyrel.ttf", "Bob Marley");
	
	// creation de l'image au vol
	imagejpeg($dest);
	
	imagedestroy($dest);
	
?>