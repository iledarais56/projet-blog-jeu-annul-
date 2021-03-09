<?php ob_start(); ?>

<?php  $commentaire = $getCommentaire->fetch(); ?>
<section>
    
    <p> votre commentaire sur le jeu <?php echo $commentaire['titreJeu'] ?> a été ajouté avec succès !</p>
    <br>
        
    <div class="all-articles" >
        <div >
            <a class="btn " href="index.php?action=jeuFiche&id=<?=$commentaire['id_jeu'] ?>&categorie=<?=$commentaire['categorieJeu'] ?>">retour au jeu</a>
        </div>
                    
    </div> 
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>