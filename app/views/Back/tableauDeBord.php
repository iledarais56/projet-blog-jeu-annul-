<?php ob_start(); ?>

<h1>Tableau de bord</h1>

<section class="card_gestion">

    <div class="card">
        <h3>Mes jeux</h3>
        <a href="indexAdmin.php?action=jeuxListe">Gérer mes jeux</a>
    </div>

    <div class="card">
        <h3>Mes mails</h3>
        <a href="indexAdmin.php?action=mails">Gérer mes mails</a>
    </div>

</section>

<section class="card_gestion">

    <div class="card">
        <h3>les administrateurs</h3>
        <a href="">Gérer les administrateurs</a>
    </div>

    <div class="card">
        <h3>Mon top</h3>
        <a href="indexAdmin.php?action=top">Gérer mon top</a>
    </div>

</section>

<?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>