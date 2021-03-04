<?php ob_start(); ?>

<h1>Bienvenue sur le blog des jeux de société modernes</h1>



 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>