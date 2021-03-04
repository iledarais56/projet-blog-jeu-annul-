<?php ob_start(); ?>


<section>
<div class="newImg">
        <h2>Votre commentaire sur le jeu <?= $jeu['title']?></h2>
        <form action="index.php?action=postCommentaire" method="post">

            <div class="article_title">
                <label for="pseudo">Votre pseudo</label>
                <input type="text" id="pseudo" name="pseudo">
            </div>
            <div class="article_title">
                <label for="pseudo">Votre commentaire</label>
                <textarea  id="content" name="content"></textarea>
            </div>
            <div class="sub_btn">
                <input type="submit" value="poster votre commentaire" name="submit"  class="submit">
            </div>

        </form>
    </div>
            
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>