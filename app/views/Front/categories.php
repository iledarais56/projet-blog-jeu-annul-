<?php ob_start(); ?>

<section>
    <h1>Les différentes catégories de jeux</h1>
    <div class="article_about">
        
        <div class="all-articles">
            
                    <?php foreach($Categories as $categorie){ ?>
                        
                        <a href="index.php?action=categorie&id=<?=$categorie['id'] ?>">
                            <div class="article categorie">
                                <div class="card_mail">
                                    <h2><?= htmlspecialchars($categorie['title']) ?></h2><br><br>
                                    <div class="image-container">
                                        <img src="app/public/Front/images/dés.jpg" alt="<?= $categorie['title']?>" ><br>
                                    </div>
                                    <p><?= htmlspecialchars($categorie['content']) ?></p>
                                </div>
                            </div>
                        </a>

                    <?php }  ?> 

        </div>
    </div>
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>