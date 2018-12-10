<?php    
// var_dump($_POST);
echo $_POST['fileName'];
var_dump( $_FILES);

$temporarychoice = $_FILES['fichier_upload']['tmp_name'];

$definitivePathName = 'upload/' . $_FILES['fichier_upload']['name'];

// recup extension du fichier


$extension = substr(strrchr($_FILES['fichier_upload']['name'], "."), 1);

$newName = $_POST['fileName'] . '.' . $extension;

$definitivePathName = 'upload/' . $newName;

$moveIsOk = move_uploaded_file($temporarychoice, $definitivePathName);

if ($moveIsOk) {
      $message = "le fichier à été téléchargé dans " . $definitivePathName;
} else {
      $message = "Suite à une erreur, le fichier n'a pas été téléchargé !!";
}
echo $message;
?>