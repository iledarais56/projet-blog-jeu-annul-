<?php ob_start(); ?>

<section>
    <div class="article_about">
        <h2>Liste des jeux</h2>
        <br>  
            <?php foreach($allJeux as $jeu){ ?>

                <a href="indexAdmin.php?action=Jeu&id=<?=$jeu['id'] ?>">
                    <h3><?= htmlspecialchars($jeu['title']) ?></h3>
                </a>        
                <br>    

            <?php }  ?> 

                      
       
        <br>
        <br>
        <div class="btn_gestion">
            <a class="btn_delet" href="indexAdmin.php?action=createJeu">Créer un jeu</a>
        </div> 
        <br>
        <br>
    </div>
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>