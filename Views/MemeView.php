<?php include('Views/HeaderView.php'); ?>
<section id="pageGenerale">
    <div class="container">
        <div class="row">
            <div class="col-12-md">
                <h1>Créez votre mémère ici</h1>

                <div class="choixPhotos">
                    <h3>Choisis ta photo dans les propositions ou charge-la</h3>
                    <div class="photo">
<img class='imageAMemer bouton' style="width: 8%; height:100%" src="Images/photo<?= $range['0'] ?>.jpg">
<img class='imageAMemer bouton' style="width: 8%; height:100%" src="Images/photo<?= $range['1'] ?>.jpg">
<img class='imageAMemer bouton' style="width: 8%; height:100%" src="Images/photo<?= $range['2'] ?>.jpg">
<img class='imageAMemer bouton' style="width: 8%; height:100%" src="Images/photo<?= $range['3'] ?>.jpg">
<img class='imageAMemer bouton' style="width: 8%; height:100%" src="Images/photo<?= $range['4'] ?>.jpg">
<img class='imageAMemer bouton' style="width: 8%; height:100%" src="Images/photo<?= $range['5'] ?>.jpg">
<img class='imageAMemer bouton' style="width: 8%; height:100%" src="Images/photo<?= $range['6'] ?>.jpg">
<img class='imageAMemer bouton' style="width: 8%; height:100%" src="Images/photo<?= $range['7'] ?>.jpg">
<img class='imageAMemer bouton' style="width: 8%; height:100%" src="Images/photo<?= $range['8'] ?>.jpg">
<img class='imageAMemer bouton' style="width: 8%; height:100%" src="Images/photo<?= $range['9'] ?>.jpg">


                    </div>
                    <form action="?page=meme" method="post">
                        <input type="file" name="upload">
                        <input type="submit" name="envoyer" value="Valider">
                    </form>
                </div>
            </div>

    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="row">
                    <p class="instructions imageAMemer"><span class="span">Instructions : </span> Tapez le texte que vous voulez afficher sur les photos. La première case s'affichera en haut de la photo, la seconde en bas. Une fois l'oeuvre d'art achevée, envoyez mémé dans les orties! (30 caractères maxi). Donne-lui ensuite un nom (10 caractère maxi), sans espace.</p>
                </div>
                <div class="row">
                    <form onsubmit='return false' action="enregistrement_meme.php" method="post" class="formValid">
<!-- i put nom -->
                        <textarea type="text" id="textehaut" name="textehaut" placeholder="Meme'R ici" maxlength="30"></textarea>
                        <textarea type="text" id="textebas" placeholder="Meme'R ici" name="textebas" maxlength="30"></textarea>
                        <textarea type="text" id="nommeme" placeholder="Donne un nom à ton meme" name="nommeme" maxlength="10"></textarea>
                        <input type="submit" name="valider" value="Essayer" onclick='loadDoc();'>
                    </form>
                </div>
            </div>
            <div class="col-md">
                <div class="blocimage">
                   <!--  <img id="chosenPic" src="<?= $chosenPic ?>"> -->
                    <div id="chosenPic"></div>
                    <!-- <img style="width: 100%; max-height: 100%" src="memere.jpg"> -->
                    <div id="finalMeme">
                    
                    </div>
                    <div id="preview">
                        
                    </div>
                </div>
            </div>
        </div>
                    <button onclick="loadDoc">Mémé dans les orties!</button>
    </div>

</section>


<!-- input caché pour stocker la position du texte
chemin des images avec index et htaccess? -->


<?php include('Views/FooterView.php'); ?>