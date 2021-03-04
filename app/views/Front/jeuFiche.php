<?php ob_start(); ?>

<?php $jeu =$getJeuFiche->fetch(); ?>
<?php  $commentaire = $getCommentaires->fetch(); ?>
<section>
    
        <h1><?= $jeu['title']?></h1> <br><br>
        <div class="image-container"style="display:flex">
            <img src="app/public/Front/images/<?= $jeu['img'] ?>.jpg" alt="<?=  htmlspecialchars($jeu['title']) ?>"style="width:40%" ><br>
            <br><br>
            <div class="description">
                <h3>description: </h3>
                <p><?=  htmlspecialchars($jeu['content']) ?></p>
                <br><br>
                <div>
                    <h3>Derniers commentaires sur ce jeu:</h3>
                    <br>
                    
                    <?php foreach($getCommentaires as $commentaire){ ?>

                        <div>
                            <p>posté par: <?=  htmlspecialchars($commentaire['pseudo']) ?></p>
                            <br>
                            <p><?=  htmlspecialchars($commentaire['content']) ?></p>
                        </div>
                        <br>
                        <br>

                    <?php } ?>

                    <div >
                        <a class="btn" href="indexAdmin.php?action=createCommentaire&id=<?=$jeu['id'] ?>">poster un commentaire</a>
                    </div> 
                </div>
            </div>
            
        </div><br><br>
            
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>