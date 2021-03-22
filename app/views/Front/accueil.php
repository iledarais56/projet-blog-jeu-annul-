<?php ob_start(); ?>

<h1>Bienvenue sur Blog-ludik!<br>le blog sur les jeux de société modernes </h1>


    <div id="slider" class="image-container">
    <img src="app/public/Front/images/jeux-slide1.jpg" alt="jeux de société" id="slide">
        <div id="precedent" onclick="ChangeSlide(-1)"><</div>
        <div id="suivant" onclick="ChangeSlide(1)">></div>
    </div>


<p class="text">Ce site a pour but de parler des jeux de société modernes,<br>
    Je donne mon avis perso sur les jeux présents dans ma ludothèque. 
</p>  

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>