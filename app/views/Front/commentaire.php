<?php ob_start(); ?>

<section>
<div class="newImg">
        <h2>Votre commentaire sur le jeu <?= $title ?> </h2>
        <form action="index.php?action=postCommentaire&id_jeu=<?php echo $id_jeu ?>&categorie=<?php echo $categorie?>" method="post">

            <div class="article_title">
                <label for="pseudo">Votre pseudo</label>
                <input type="text" id="pseudo" name="pseudo">
            </div>
            <div class="article_title">
                <label for="content">Résumé de votre commentaire</label>
                <textarea  id="content" name="content"></textarea>
            </div>
            <div class="article_title">
                <label for="totalContent">Votre commentaire</label>
                <textarea  id="totalContent" name="totalContent"></textarea>
            </div>
            <div class="sub_btn">
                <input type="submit" value="poster votre commentaire" name="submit"  class="submit">
            </div>

        </form>
    </div>
            
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>