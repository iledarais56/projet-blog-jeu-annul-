<?php ob_start(); ?>

<section>
<div class="newImg">
        <h2>Votre commentaire sur le jeu <?= $title ?> </h2>
        <form action="index.php?action=postCommentaire&id_jeu=<?php echo $id_jeu ?>&categorie=<?php echo $categorie?>" method="post">

            <div class="article_title">
                <label for="pseudo">Votre pseudo</label>
                <input type="text" id="pseudo" name="pseudo">
            </div>
            <div class="article_title">
                <label for="content">Résumé de votre commentaire</label>
                <textarea  id="content" name="content"></textarea>
            </div>
            <div class="article_title">
                <label for="totalContent">Votre commentaire</label>
                <textarea  id="totalContent" name="totalContent"></textarea>
            </div>
            <div class="article_title">
            <label for="notepost">Votre note</label>
            <select id="notepost"name="notepost">
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
            </div>
            <br><br>
            <div class="sub_btn">
                <input type="submit" value="poster votre commentaire" name="submit"  class="submit">
            </div>

        </form>
    </div>
            
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>