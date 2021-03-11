<?php ob_start(); ?>

<?php  $options = $getJeux->fetchAll(); ?>

<section>
    <div class="article_about">
        <h2>Gestion du top</h2>
        <div class="all-articles">
            <div class="article">
                <div class="card_mail">
                    <div class="form_contact">
                        <form action="indexAdmin.php?action=editionTop" method="post">
                                <?php foreach($tops as $top){ ?>

                                    <label for="numero<?= htmlspecialchars($top['numero']) ?>">Numero <?= htmlspecialchars($top['numero']) ?>: </label>
                                    <br>        
                                    <select id="numero<?= htmlspecialchars($top['numero']) ?>"name="numero<?= htmlspecialchars($top['numero']) ?>">
                                        <option value="<?= htmlspecialchars($top['id']) ?>"><?= htmlspecialchars($top['title']) ?></option>
                                            <?php foreach($options as $option){ ?>
                                                <option value="<?= htmlspecialchars($option['id_jeu']) ?>"><?= htmlspecialchars($option['titreJeu']) ?></option>
                                            <?php }  ?> 
                                    </select>
                                    <br><br>
                                            
                                    
                                <?php }  ?> 
                            <br>
                            <input type="submit" value="editer ce top">
                            <br>
                        </form>
                    </div>    
                </div>
            </div>     
        </div>
    </div>
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>