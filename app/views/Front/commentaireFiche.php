<?php ob_start(); ?>

<?php  $commentaire = $getCommentaire->fetch(); ?>
<section>
    <div >
        <h2 class="soulign">commentaire sur le jeu <?php echo $commentaire['titreJeu'] ?></h2>
        <br>
        <div class="all-articles">
            <div class="comment">
                <div class="commentairebloc2">
                    <div class="commentairebloc">
                        <p class="text soulign">posté par:  </p><p class="text "> <?=  htmlspecialchars($commentaire['pseudo']) ?></p>
                        
                        <p class="text soulign">Impression générale: </p><p class="text ">" <?=  htmlspecialchars($commentaire['content']) ?> " </p>
                    </div>
                    <div class="commentairebloc">
                        <p class="soulign text">Note: </p><p class="note"><?=  htmlspecialchars($commentaire['notepost']) ?> </p>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <div class="commentairebloc commentairebloc1">
                <p>&nbsp &nbsp<?=  htmlspecialchars($commentaire['totalContent']) ?></p>
            </div>
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