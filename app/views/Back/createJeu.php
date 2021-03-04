
<section>
    <div class="article_about">
        <h2>création de jeu </h2>
        <div class="all-articles">
            

                <div class="article">
                    <div class="card_mail">
                        <div class="form_contact">
                            <form action="indexAdmin.php?action=newJeu" method="post" >
                                <label for="title">titre</label>
                                <br>
                                <textarea id="title" name="title" ></textarea>
                                <br>
                                <label for="content">contenu</label>
                                <br>
                                <textarea id="content" name="content" style="height:200px" ></textarea>
                                <br>
                                <label for="categorie">Catégorie</label>
                                <br>
                                <select id="categorie"name="categorie">
                                    <option value="1">familiaux</option>
                                    <option value="2">enfant</option>
                                    <option value="3">d'ambiance</option>
                                    <option value="4">expert</option>
                                </select>
                                <br>
                                <label for="img">Titre de votre image<br>(en minuscules et avec des tirets a la place des espaces)</label>
                                <br>
                                <textarea id="img" name="img" ></textarea>
                                <br> 
                                <br>
                                <input type="submit" value="Créer">
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