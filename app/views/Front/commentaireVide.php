<?php ob_start(); ?>

<?php  $jeu = $getJeuAdmin->fetch(); ?>
<section>
    
    <p> votre commentaire sur le jeu <?php echo $jeu['title'] ?> n'a pas été fait correctement !<br>
    Certains champs sont vides.</p>
    <br>
        
    <div class="all-articles" >
        <div >
            <a class="btn " href="index.php?action=jeuFiche&id=<?=$jeu['id'] ?>&categorie=<?=$jeu['categorie'] ?>">retour au jeu</a>
        </div>
                    
    </div> 
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>