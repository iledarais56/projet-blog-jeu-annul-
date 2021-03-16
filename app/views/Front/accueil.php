<?php ob_start(); ?>

<h1>Bienvenue sur Blog-ludik!<br>le blog sur les jeux de société modernes </h1>

<div class="image-container">
    <img src="app/public/Front/images/la-scene.jpg" alt="la scene">
 </div> 

<p class="text">Ce site a pour but de parler des jeux de société modernes,<br>
    Je donne mon avis perso sur les jeux présents dans ma ludothèque. 
</p>  

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>