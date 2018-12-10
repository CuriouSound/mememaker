<?php
      //Set the Content Type
header('Content-type: image/jpeg');

      // Create Image From Existing File
$sunset = imagecreatefromjpeg('sunset.jpg');

      // Allocate A Color For The Text
$black = imagecolorallocate($sunset, 0, 0, 0);

      // Set Path to Font File
$font_path = 'C:/wamp64/www/mememaker/fonts/Oxygen-light.ttf';

      // Set Text to Be Printed On Image
$text = "This is a sunset!";

      // Print Text On Image
imagettftext($sunset, 100, 0, 0, 400, $black, $font_path, $text);

      // Send Image to Browser
imagejpeg($sunset);

imagedestroy($sunset);