<?php

   error_reporting(E_ALL);
   ini_set("display_errors", 1);

	header('Content-Type: image/jpeg');

	$im = imagecreatefromjpeg("cancha.jpg");

	$negro = imagecolorallocate($im, 0, 0, 0);
	$rojo = imagecolorallocate($im, 255, 0, 0);
	$texto = '*';
	$fuente = './arial.ttf';


	//imagettftext($im, 100, 0, $col, $fil, $rojo, $fuente, $texto);


	//arquero A
	imagettftext($im, 40, 0, 340, 98, $negro, $fuente, "Ester");
	//cierre A
	imagettftext($im, 40, 0, 300, 300, $negro, $fuente, "Rosana");
	//ala derecha A
	imagettftext($im, 40, 0, 100, 410, $negro, $fuente, "Ani");
	//ala izquierda A
	imagettftext($im, 40, 0, 600, 410, $negro, $fuente, "Zio");
	//pivot A
	imagettftext($im, 40, 0, 360, 550, $negro, $fuente, "Ale");

	//arquero B
	imagettftext($im, 40, 0, 340, 1091, $rojo, $fuente, "@@");
	//cierre B
	imagettftext($im, 40, 0, 300, 880, $rojo, $fuente, "Noelia");
	//ala derecha B
	imagettftext($im, 40, 0, 100, 770, $rojo, $fuente, "Yuliana");
	imagettftext($im, 40, 0, 100, 830, $rojo, $fuente, "* Romi");
	//ala izquierda B
	imagettftext($im, 40, 0, 550, 770, $rojo, $fuente, "Sandra");
	imagettftext($im, 40, 0, 550, 830, $rojo, $fuente, "* Mari");
	//pivot B
	imagettftext($im, 40, 0, 360, 640, $rojo, $fuente, "Luz");
	imagettftext($im, 40, 0, 360, 690, $rojo, $fuente, "* Kiara");


	imagejpeg($im, NULL, 100);
	// o bien con
	imagejpeg($im);

?>
