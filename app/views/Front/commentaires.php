<?php ob_start(); ?>

<?php  $commentaire = $getCommentaires->fetch(); ?>
<section>
<div class="newImg">
        <h2>les commentaires sur le jeu </h2>
            <br>
            <div class="all-articles">
                <?php foreach($Commentaires as $commentaire){ ?>
                   
                    <div class="article">
                        <a href="index.php?action=getCommentaire&id=<?=$commentaire['id'] ?>">
                        <p>posté par: <?=  htmlspecialchars($commentaire['pseudo']) ?></p>
                        <br>
                        <p><?=  htmlspecialchars($commentaire['content']) ?></p>
                        </a>
                    </div>
                    <br>

                <?php } ?>
                <br>
            </div><br><br>
    </div>
            
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>