<?php 
//Set the Content Type
header('Content-type: image/jpeg');

// Create Image From Existing File
$sunset = imagecreatefromjpeg('sunset.jpg');

// Allocate A Color For The Text
$black = imagecolorallocate($sunset, 0, 0, 0);

// Set Path to Font File
$font_path = 'C:/xampp/htdocs/BibliothequeGD/Aller_Bd.ttf';

// Set Text to Be Printed On Image
$text = "This is a sunset!";

// Print Text On Image
imagettftext($sunset, 250, 0, 0, 4000, $black, $font_path, $text);
imagettftext($sunset, 250, 0, 0, 2000, $black, $font_path, $text);


// Send Image to Browser
imagejpeg($sunset);

// Clear Memory
imagedestroy($sunset);
?>

si le client clique sur la fonction telechargement, alors une image va s'enregistrer sur son pc 
(3 formats gif,jpeg,png)
si le client clique sur le bouton upload , alors il peut importer une image en format [...] via son pc sur le site
