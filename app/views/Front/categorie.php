<?php ob_start(); ?>
<?php  $categorie = $CategorieName->fetch(); ?>
<section>
     <h1>Les différents jeux  <?= htmlspecialchars($categorie['title']) ?> </h1> 
    <div class="article_about">
        
        <div class="all-articles">
            
                    <?php foreach($jeux as $jeu){ ?>
                        
                        <a href="index.php?action=jeuFiche&id=<?=$jeu['id'] ?>&categorie=<?=$jeu['categorie'] ?>">
                            <div class="article categorie">
                                
                                <h2><?= htmlspecialchars($jeu['title']) ?></h2><br><br>
                                <div class="image-container">
                                    <img src="app/public/Front/images/<?= $jeu['img'] ?>.jpg" alt="<?= $jeu['title']?>" ><br>
                                </div>
                                    
                                
                            </div>
                        </a>

                    <?php }  ?> 

        </div>
    </div>
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>