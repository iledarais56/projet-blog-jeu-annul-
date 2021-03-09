<?php ob_start(); ?>

<h1>Bienvenue sur Blog-ludik!<br>le blog sur les jeux de société modernes </h1>
<br>
<p>Ce site a pour but de parler des jeux de société modernes,<br>
Je donne mon avis perso sur les jeux présents dans ma ludothèque 
</p>



 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>