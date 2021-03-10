<?php ob_start(); ?>

<?php  $name = $getJeuCategorieName->fetch(); ?>
<?php  $commentaires = $getAllcommentaires->fetchAll(); ?>
<section>
<div class="newImg">
        <h2>les commentaires sur le jeu <?php echo $name['title'] ?></h2>
            <br>
            <div class="all-articles">
                <?php foreach($commentaires as $commentaire){ ?>
                   
                    
                    <a  class="article" href="index.php?action=getCommentaire&id=<?=$commentaire['id'] ?>">
                        <div class="descriptionjeu">
                            <p class="soulign">Posté par:</p><p> <?=  htmlspecialchars($commentaire['pseudo']) ?></p>
                        </div>
                        <div class="descriptionjeu" >
                            <p class="soulign">Résumé: </p><p> <?=  htmlspecialchars($commentaire['content']) ?></p>
                        </div>
                        <p>Cliquez pour voir l'avis complet.</p>
                    </a>
                    
                    <br>

                <?php } ?>
                <br>
            </div><br><br>
            <br>
        <br>
        <div class="all-articles" >
            <div >
                <a class="btn " href="index.php?action=jeuFiche&id=<?=$commentaire['id_jeu'] ?>&categorie=<?=$commentaire['categorieJeu'] ?>">retour au jeu</a>
            </div>
                       
        </div> 
    </div>
            
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>