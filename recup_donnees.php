<?php    
// var_dump($_POST);
echo $_POST['fileName'];
var_dump($_FILES);

$temporarychoice = $_FILES['fichier_upload']['tmp_name'];

$definitivePathName = 'upload/' . $_FILES['fichier_upload']['name'];

// recup extension du fichier

$extension = substr(strrchr($_FILES['fichier_upload']['name'], "."), 1);

$newName = $_POST['fileName'] . '.' . $extension;

$definitivePathName = 'upload/' . $newName;

$moveIsOk = move_uploaded_file($temporarychoice, $definitivePathName);

if ($moveIsOk) {
    $message = "The file has been uploaded in ..." . $definitivePathName;
} else {
    $message = "Error, the file couldn't be downloaded.";
}
echo $message;
