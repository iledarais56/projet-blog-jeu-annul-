<?php ob_start(); ?>



<section>
    <div class="article_about">
        <h2>Votre top a été mis a jour avec succès !</h2>
       
    </div>
    <div class="article_about">
        <a class="btn " href="indexAdmin.php?action=top">retour au top</a>
    </div>

</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>