<?php ob_start(); ?>

<h1>Contactez-nous</h1>

<div class="form_contact">
    <form action="index.php?action=contactMail" method="post">
        <label for="name">Nom</label>
        <input type="text" id="name" name="lastname" placeholder="Votre nom">

        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="firstname" placeholder="Votre prénom">
        
        <label for="mail">Email</label>
        <input type="email" id="mail" name="mail" placeholder="Votre email">
        
        <label for="sujet">Sujet</label>
        <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">
        
        <label for="content">Message</label>
        <textarea id="content" name="content" placeholder="Votre message" style="height:200px"></textarea>

        <input type="submit" value="Envoyer">
    </form>
</div>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>