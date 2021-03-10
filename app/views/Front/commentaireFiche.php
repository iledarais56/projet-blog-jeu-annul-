<?php ob_start(); ?>

<?php  $commentaire = $getCommentaire->fetch(); ?>
<section>
    <div class="newImg">
        <h2>commentaire sur le jeu <?php echo $commentaire['titreJeu'] ?></h2>
        <br>
        <div class="articles">
            <div class="commentairebloc">
                <p class="text">posté par:  &nbsp <?=  htmlspecialchars($commentaire['pseudo']) ?></p>
                
                <p class="text">Impression générale: <br><br>" <?=  htmlspecialchars($commentaire['content']) ?> " </p>
            </div>
            <br>
            <br>
        </div> 
        <div class="commentairebloc">
            <p>&nbsp &nbsp<?=  htmlspecialchars($commentaire['totalContent']) ?></p>
        </div>
        <br>
        <br>
        <div class="all-articles" >
            <div >
                <a class="btn " href="index.php?action=jeuFiche&id=<?=$commentaire['id_jeu'] ?>&categorie=<?=$commentaire['categorieJeu'] ?>">retour au jeu</a>
            </div>
                       
        </div> 
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>