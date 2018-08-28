<?php
	Header("Content-type: image/png");
	
	// chargement de l'image
	$dest = imagecreatefromjpeg("bob.jpg");
		
	$masque = imagecreatefrompng("fond_perce2.png");
	imagecopy($dest,$masque,0,0,0,0,1024,768);
    imagedestroy($masque);
		
	// largeur a redimensionner	
	$largeur = 200;
	// hauteur a redimensionner
	$hauteur = 150; 
	
	$taille = getimagesize("bob.jpg");
	$img_mini = imagecreatetruecolor ($largeur, $hauteur);
	imagecopyresampled ($img_mini,$dest,0,0,0,0,$largeur,$hauteur,$taille[0],$taille[1]);

	imagedestroy($dest);
	
	// creation de l'image au vol
	imagepng($img_mini);
	imagedestroy($img_mini);
?>