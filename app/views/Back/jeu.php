<?php ob_start(); ?>
<?php $jeu =$getJeu->fetch(); ?>
<?php $categorie = $getCategorie->fetch(); ?>
<section>
    <div class="article_about">
        <h2>edition de jeux </h2>
        <div class="all-articles">
            

                <div class="article">
                    <div class="card_mail">
                        <div class="form_contact">
                            <form action="indexAdmin.php?action=updateJeu&id=<?=$jeu['id'] ?>" method="post">
                                <label for="title">titre</label>
                                <br>
                                <textarea id="title" name="title" ><?= htmlspecialchars($jeu['title']) ?></textarea>
                                <br>
                                <label for="content">contenu</label>
                                <br>
                                <textarea id="content" name="content" style="height:200px" ><?= htmlspecialchars($jeu['content']) ?></textarea>
                                <br>
                                <label for="title">Titre de votre image<br>(avec des tirets à la place des espaces)</label>
                                <textarea type="text" id="img" name="img"><?= htmlspecialchars($jeu['img']) ?></textarea>
                                <br>
                                <label for="categorie">Catégorie du jeu</label>
                                <select id="categorie"name="categorie">
                                    <option value="<?= htmlspecialchars($jeu['categorie']) ?>"><?= htmlspecialchars($categorie['title']) ?></option>
                                    <option value="1">familiaux</option>
                                    <option value="2">enfant</option>
                                    <option value="3">d'ambiance</option>
                                    <option value="4">expert</option>
                                </select>
                                <br>
                                <br>
                                <input type="submit" value="Editer">
                                <br>
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