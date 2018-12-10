
 
<!-- // Si le client clique sur le bouton "telecharger", alors l'image se telecharge.
// (3 formats possibles : jpeg, gif, png)
// si le client veut importer une image, alors il clique sur "upload" et peut choisir une image de son choix sur son pc 
// (sous condition des trois formats imposés) -->

                                                <!-- //écrire du texte sur l'image en php -->

                                                               <!-- telechargement -->

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Page Title</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
      <script src="main.js"></script>
</head>
<body>

<h1 >fichiers uploadés</h1>

<form action="recup_donnees.php" method="post" enctype="multipart/form-data">

<p>
<label for="up" class="label">Nom du fichier après upload</label><br><br>

<input type="text" name="fileName" placeholder="entrez nouveau nom">
</p>
<p>
<input type="file" name="fichier_upload">
</p>
<p>
<input type="submit" value="enregistrer">
</p>

</form>
</body>
</html>
