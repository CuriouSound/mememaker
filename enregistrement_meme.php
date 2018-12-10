<?php


if (isset($_POST['valider'])) {

  }
$text_h=$_POST['textehaut'];
$text_b=$_POST['textebas'];
$nom=$_POST['nommeme'];
$imageAMontrer=$_POST['imageAMontrer'];

 // header('Content-type: image/jpeg');

   $imageAMontrer=  substr($imageAMontrer, 33, strlen($imageAMontrer));
   echo $imageAMontrer;
    // Create Image From Existing File
      $sunset = imagecreatefromjpeg($imageAMontrer);

      // Allocate A Color For The Text
      $black = imagecolorallocate($sunset, 0, 0, 0);

      // Set Path to Font File
      $font_path = '/var/www/html/Projet_13_memeR/fonts/Bangers-Regular.ttf';

      // Set Text to Be Printed On Image
      $text = "Prouut!";


      /*transformations image*/
      $img_size = getimagesize($sunset);
      echo $img_size;

      // Print Text On Image
      imagettftext($sunset, 50, 0, 0, 100, $black, $font_path, $text_h);
      imagettftext($sunset, 50, 0, 0, 400, $black, $font_path, $text_b);

      $chemin = $_SERVER['DOCUMENT_ROOT'].'/Projet_13_memeR/Images';


// changer situation du texte (on récupére la hauteur et on divise et pareil avec la largeur)

// Send Image to Browser

  $imageFinale = imagejpeg($sunset,$chemin."/".$nom);


$cheminImageFinale = $chemin.'/'.$nom;
echo $cheminImageFinale;
     // Clear Memory
      imagedestroy($sunset);
// }
?>