<?php ob_start(); ?>

<section>
    <div class="article_about">
        <h2>Liste des mails</h2>
        <div class="all-articles">
            <?php foreach($allMails as $allMail){ ?>

                <div class="article">
                    <div class="card_mail">
                        <h3>Nouveau mail de :</h3>
                        <p><?= htmlspecialchars($allMail['lastname']) ?> <?= htmlspecialchars($allMail['firstname']) ?></p>
                    </div>

                    <div class="card_mail">
                        <h4>mail : </h4>
                        <p><?= htmlspecialchars($allMail['mail']) ?></p>
                    </div>

                    <div class="card_mail">
                        <h4>sujet : </h4>
                        <p><?= htmlspecialchars($allMail['sujet']) ?></p>
                    </div>

                    <div class="card_mail">
                        <h4>message : </h4>
                        <p><?= htmlspecialchars($allMail['content']) ?></p>
                    </div>

                    <div class="btn_gestion">
                        <a class="btn_delet" href="indexAdmin.php?action=deleteMail&id=<?=$allMail['id'] ?>">Supprimer ce mail</a>
                    </div>

                </div>

            <?php }  ?>    

        </div>
    </div>
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>