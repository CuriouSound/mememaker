<?php


if (isset($_POST['valider'])) {

$text_h=$_POST['textehaut'];
$text_b=$_POST['textebas'];
$nom=$_POST['nommeme'];
  }
 // header('Content-type: image/jpeg');

      // Create Image From Existing File
      $sunset = imagecreatefromjpeg('Images/photo2.jpg');

      // Allocate A Color For The Text
      $black = imagecolorallocate($sunset, 255, 0, 0);

      // Set Path to Font File
      $font_path = '/var/www/html/Projet_13_memeR/fonts/SHERWOOD.TTF';

      // Set Text to Be Printed On Image
      $text = "Prouut!";

      // Print Text On Image
      imagettftext($sunset, 50, 0, 0, 100, $black, $font_path, $text_h);
      imagettftext($sunset, 50, 0, 0, 400, $black, $font_path, $text_b);

$chemin = $_SERVER['DOCUMENT_ROOT'].'/Projet_13_memeR/Images';




// Send Image to Browser

  $imageAMontrer = imagejpeg($sunset,$chemin."/".$nom);



      // Clear Memory
      // imagedestroy($sunset);
}
?>