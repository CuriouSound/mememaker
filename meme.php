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
 
// Si le client clique sur le bouton "telecharger", alors l'image se telecharge.
// (3 formats possibles : jpeg, gif, png)
// si le client veut importer une image, alors il clique sur "upload" et peut choisir une image de son choix sur son pc 
// (sous condition des trois formats imposés)

function download ($filename){
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




                                                                  //telechargement


      
// var_dump($_POST);
var_dump($_POST['fileName']);
var_dump($_FILES);


$temporarychoice = $_FILES['fichier_upload']['tmp_name'];

// $definitivePathName = 'upload/'.$_FILES['fichier_upload']['name'];

// recup extension du fichier


$extension=substr (strrchr ($_FILES['fichier_upload']['name'],"."), 1);

$newName = $_POST['fileName'].'.'.$extension;

$definitivePathName = 'upload/'.$newName;

$moveIsOk = move_uploaded_file($temporarychoice, $definitivePathName);

if($moveIsOk){
$message = "le fichier à été téléchargé dans ".$definitivePathName;
}
else{
  $message = "Suite à une erreur, le fichier n'a pas été téléchargé !!";
}
}