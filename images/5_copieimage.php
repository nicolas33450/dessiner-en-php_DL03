<?php
	header("Content-type: image/png");
	// chargement de l'image
	$dest = imagecreatefrompng("rabbi3.png");
	$masque = imagecreatefrompng("ding.png");
	
	// ********************************************************************
	//        imagecopy permet de copier une image sur une auutre
	// ********************************************************************
	// imgDest => Image sur laquelle on copie (dest)
	// imageMasque = > image déposée sur l'autre (masque)
	// x1 => position x ou l'on place l'image(masque) sur l'image dest
	// y1 => position y ou l'on place l'image(masque) sur l'image dest
	// x2 => position x à partir de laquelle on va selectionner la partie à copier de l'image(masque)
	// y2 => position y à partir de laquelle on va selectionner la partie à copier de l'image(masque)
	// largeur => nombre de pixels à partir de la position x2 (que l'on va copier)
	// hauteur => nombre de pixels à partir de la position y2 (que l'on va copier)
	
	
	// imagecopy(imgdest,imageMasque,x1,y1,x2,y2,largeur,hauteur);
	imagecopy($dest,$masque,350,160,0,0,100,100);
	
	// creation de l'image au vol
	imagepng($dest);
	
	imagedestroy($dest);
	imagedestroy($masque);
?>
