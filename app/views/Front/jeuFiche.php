<?php ob_start(); ?>

<?php $jeu =$getJeuFiche->fetch(); ?>
<section>
    
        <h1><?= $jeu['title']?></h1> <br><br>
        <div class="image-container"style="display:flex">
            <img src="app/public/Front/images/<?= $jeu['img'] ?>.jpg" alt="<?= $jeu['title']?>"style="width:40%" ><br>
            <br><br>
            <p><?= $jeu['content']?></p>
        </div><br><br>
            
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>