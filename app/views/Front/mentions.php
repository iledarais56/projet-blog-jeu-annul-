<?php ob_start(); ?>

<h1>Mentions légales </h1>
<br>
<p class="text"> bla blabla blablabla blablablabla bla blabla blablabla blablablabla bla blabla blablabla blablablabla<br>
bla blabla blablabla blablablabla bla blabla blablabla blablablabla bla blabla blablabla blablablabla<br>
bla blabla blablabla blablablabla bla blabla blablabla blablablabla bla blabla blablabla blablablabla<br>
bla blabla blablabla blablablabla bla blabla blablabla blablablabla bla blabla blablabla blablablabla<br>
</p>



 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>