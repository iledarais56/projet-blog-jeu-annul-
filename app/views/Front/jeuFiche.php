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
                <br>
                <div class="all-articles">
                    <div class="article">
                        <h3>Ma note :</h3>
                        <br>
                        <h3><?=  htmlspecialchars($jeu['note']) ?>/20</h3>
                    </div>
                    <div class="article">
                        <h3>Mon avis :</h3>
                        <br>
                        <p><?=  htmlspecialchars($jeu['avis']) ?></p>
                        <br>
                    </div>
                </div>
                <br> 
            </div>   
        </div>
          <div>
                    <h3>Derniers commentaires sur ce jeu:</h3>
                    <br>
                    <div class="all-articles">
                        <?php foreach($getCommentaires as $commentaire){ ?>
                            
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
                    <div class="all-articles" >
                    <div >
                        <a class="btn " href="index.php?action=createCommentaire&id=<?=$jeu['id'] ?>">poster un commentaire</a>
                    </div>
                    <div >
                        <a class="btn " href="index.php?action=getAllcommentaires&id=<?=$jeu['id'] ?>">voir tous les commentaires</a>
                    </div>
                   </div> 
                </div>
        <br><br>
            
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>