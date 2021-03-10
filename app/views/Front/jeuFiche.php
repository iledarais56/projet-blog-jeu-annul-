<?php ob_start(); ?>

<?php $jeu =$getJeuFiche->fetch(); ?>
<?php  $commentaires = $getCommentaires->fetchAll(); ?>
<section>
    
        <h1><?= $jeu['title']?></h1> <br><br>
        <div class="descriptionjeu">
            <div class="image">
                <img src="app/public/Front/images/<?= $jeu['img'] ?>.jpg" alt="<?=  htmlspecialchars($jeu['title']) ?>" ><br>
            </div>    
            <br><br>
            <div class="description">
                <h3 class="soulign">Description: </h3>
                <p><?=  htmlspecialchars($jeu['content']) ?></p>
                <br>
                <div class="all-articles">
                    <div class="bloc">
                        <h3 class="soulign">Ma note :</h3>
                        <br>
                        <h3 id="note"><?=  htmlspecialchars($jeu['note']) ?>/20</h3>
                    </div>
                    <div class="bloc">
                        <h3 class="soulign">Mon avis :</h3>
                        <br>
                        <p><?=  htmlspecialchars($jeu['avis']) ?></p>
                        <br>
                    </div>
                </div>
                <br> 
            </div>
        </div>
        <div>
            <h3 class="soulign">Derniers commentaires sur ce jeu:</h3>
            <br>
            <div class="all-articles">
                <?php foreach($commentaires as $commentaire){ ?>
                                                
                        <a  class="article" href="index.php?action=getCommentaire&id=<?=$commentaire['id'] ?>">
                        <div class="descriptionjeu" >
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
            </div>
            <br>
            <br>
            <div class="all-articles" >
                <div >
                    <a class="btn " href="index.php?action=createCommentaire&id=<?=$jeu['id'] ?>&categorie=<?=$jeu['categorie'] ?>&title=<?=  htmlspecialchars($jeu['title']) ?>">poster un commentaire</a>
                </div>
                <div >
                    <a class="btn " href="index.php?action=getAllcommentaires&id=<?=$jeu['id'] ?>&categorie=<?=$jeu['categorie'] ?>">voir tous les commentaires</a>
                </div>
            </div> 
        </div>
        <br>
        <br>
            
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>