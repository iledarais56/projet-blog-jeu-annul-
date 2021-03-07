
<?php ob_start(); ?>

<?php  $name = $getJeuCategorieName->fetch(); ?>
<?php  $commentaire = $getAllcommentaires->fetch(); ?>
<section>
<div class="newImg">
        <h2>les commentaires sur le jeu <?php echo $name['title'] ?></h2>
            <br>
            <div class="all-articles">
                <?php foreach($getAllcommentaires as $commentaire){ ?>
                   
                    <div class="article">
                        <p>posté par: <?=  htmlspecialchars($commentaire['pseudo']) ?></p>
                        
                        <p>résumé: <?=  htmlspecialchars($commentaire['content']) ?></p>
                       
                        <div>
                            <p>Contenu: <br><?=  htmlspecialchars($commentaire['totalContent']) ?></p>
                        </div>
                        <div class="btn_gestion">
                            <a class="btn_delet" href="indexAdmin.php?action=deletecommentaire&id=<?=$commentaire['id'] ?>&id_jeu=<?=$commentaire['id_jeu'] ?>">Supprimer ce commentaire</a>
                        </div>
                        <br><br>
                    </div>
                    

                <?php } ?>
                <br>
            </div><br><br>
    </div>
            
     
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>