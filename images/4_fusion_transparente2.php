<?php
	header("Content-type: image/png");
	// chargement de l'image
	$dest = imagecreatefromjpeg("bob.jpg");
	$masque = imagecreatefrompng("fond_perce2.png");
	
	//imagecopy (image destination, image qui sert de masque, pos x ou l'on place le masque, pos y ou l'on place le masque,
    // pos x dans le masque à partir de laquelle on va copier, pos y dans le masque à partir de laquelle on va copier,
	// largeur de la zone que l'on copie,hauteur de la zone que l'on copie );
	imagecopy($dest,$masque,0,0,0,0,1024,768);

	// creation de l'image au vol
	imagepng($dest);
	
	imagedestroy($dest);
	imagedestroy($masque);
?>