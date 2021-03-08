<?php ob_start(); ?>

<section>
    <div class="article_about">
        <h2>Gestion de jeu</h2>
        <div class="all-articles">
        <?php $jeu =$getJeuAdmin->fetch(); ?>

                <div class="article">
                    <div class="card_mail">
                        <h3><?= htmlspecialchars($jeu['title']) ?></h3><br><br>
                        
                        <div class="image-container" style="text-align:center">
                            <img src="app/public/Front/images/<?= $jeu['img'] ?>.jpg" alt="<?= $jeu['title']?>" style="width:50%"><br>
                        </div><br><br>
                      
                    </div>
                
                    <div>
                        <div class="btn_gestion">
                            <a class="btn_delet" href="indexAdmin.php?action=deleteJeu&id=<?=$jeu['id'] ?>">Supprimer ce jeu</a>
                        </div>
                        <br>
                        <br>
                        <div class="btn_gestion">    
                            <a class="btn_delet" href="indexAdmin.php?action=editionJeu&id=<?=$jeu['id'] ?>">Editer ce jeu</a>
                        </div>
                        <br>
                        <br>
                        <div class="btn_gestion">    
                            <a class="btn_delet" href="indexAdmin.php?action=commentaires&id_jeu=<?=$jeu['id'] ?>">gerer les commentaires de ce jeu</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>