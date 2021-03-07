<?php ob_start(); ?>

<?php  $commentaire = $getCommentaire->fetch(); ?>
<section>
    <div class="newImg">
        <h2>commentaire sur le jeu <?php echo $commentaire['titreJeu'] ?></h2>
        <br>
        <div class="articles">
            <div class="commentairebloc">
                <p>posté par:<strong> <?=  htmlspecialchars($commentaire['pseudo']) ?></strong></p>
                <br><br>
                <p>Impression générale: <br>" <strong><?=  htmlspecialchars($commentaire['content']) ?></strong> " </p>
            </div>
            <br>
            <br>
        </div> 
        <div class="commentairebloc">
            <p><?=  htmlspecialchars($commentaire['totalContent']) ?></p>
        </div>
        <br>
        <br>
        <div class="all-articles" >
            <div >
                <a class="btn " href="index.php?action=retourJeu&id=<?=$commentaire['id_jeu'] ?>">retour au jeu</a>
            </div>
                       
        </div> 
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>