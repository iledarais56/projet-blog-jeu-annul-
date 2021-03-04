
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
                                <label for="content">description</label>
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
                                <label for="note">note</label>
                                <br>
                                <select id="note"name="note">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                </select>
                                <br>
                                <label for="avis">Mon avis</label>
                                <br>
                                <textarea id="avis" name="avis" style="height:200px" ></textarea>
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