<?php ob_start(); ?>

<section>
    <div class="article_about">
        <h2>Gestion du top</h2>
        <div class="all-articles">
            <div class="article">
                <div class="card_mail">

                    <?php foreach($tops as $top){ ?>
                        
                                <h2>Numero <?= htmlspecialchars($top['numero']) ?>: 
                                    <select id="title<?= htmlspecialchars($top['numero']) ?>"name="title<?= htmlspecialchars($top['numero']) ?>">
                                        <option value="<?= htmlspecialchars($top['id']) ?>"><?= htmlspecialchars($top['title']) ?></option>
                                        <?php foreach($jeux as $jeu){ ?>
                                            <option value="<?= htmlspecialchars($jeu['id']) ?>"><?= htmlspecialchars($jeu['title']) ?></option>
                                        <?php }  ?> 
                                    </select>
                                </h2>
                                <br><br>
                                
                           
                    <?php }  ?> 
                    <br>
                    <div class="btn_gestion">    
                        <a class="btn_delet" href="indexAdmin.php?action=editionTop">editer ce top</a>
                    </div>
                    <br>  
                </div>
            </div>     
        </div>
    </div>
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>