<?php ob_start(); ?>

<section>
    <h1>Mon top du moment</h1>
    <div class="article_about">
        
        <div class="all-articles">
            
                    <?php foreach($tops as $top){ ?>
                        
                        <div>
                            <h2>Numero<?= htmlspecialchars($top['numero']) ?> </h2>
                            <a href="index.php?action=jeuFiche&id=<?=$top['id'] ?>&categorie=<?=$top['categorie'] ?>">
                                <div class="article categorie" id="numero<?= htmlspecialchars($top['numero']) ?>">
                                    <h2><?= htmlspecialchars($top['title']) ?></h2><br><br>
                                    <div class="image-container">
                                        <img src="app/public/Front/images/<?= $top['img'] ?>.jpg" alt="<?= $top['title']?>" ><br>
                                    </div> 
                                </div>
                            </a>
                        </div>

                    <?php }  ?>

        </div>
    </div>
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>